import './bootstrap';
import Hls from 'hls.js';

document.addEventListener('livewire:load', () => {
    Livewire.on('playStream', url => {
        var video = document.getElementById('player');
        var errorMessage = document.getElementById('error-message');

        if (!video) {
            console.error("Video element not found.");
            return;
        }

        if (!url) {
            console.error("Stream URL is not defined.");
            return;
        }

        if (Hls.isSupported()) {
            var hls = new Hls({
                maxBufferLength: 30,
                maxMaxBufferLength: 60,
                lowBufferWatchdogPeriod: 0.5,
                highBufferWatchdogPeriod: 3,
                enableWorker: true,
                fragLoadingTimeOut: 20000,
                manifestLoadingTimeOut: 20000,
                levelLoadingTimeOut: 20000,
                startLevel: -1,
                capLevelOnFPSDrop: true
            });

            hls.attachMedia(video);
            hls.on(Hls.Events.MEDIA_ATTACHED, () => {
                hls.loadSource(url);
            });

            hls.on(Hls.Events.MANIFEST_PARSED, function () {
                console.log("Manifest parsed. Starting playback.");
                video.play().catch(error => {
                    console.error("Playback error:", error);
                    errorMessage.textContent = "Playback error: " + error.message;
                });
            });

            hls.on(Hls.Events.ERROR, function (event, data) {
                console.error("Hls.js error:", data);

                if (data.fatal) {
                    switch (data.type) {
                        case Hls.ErrorTypes.NETWORK_ERROR:
                            console.error("Network error:", data.details);
                            errorMessage.textContent = "Network error encountered. Please check the stream URL.";
                            break;
                        case Hls.ErrorTypes.MEDIA_ERROR:
                            console.error("Media error:", data.details);
                            errorMessage.textContent = "Media error encountered. Attempting to recover...";
                            hls.recoverMediaError();
                            break;
                        default:
                            console.error("Fatal error:", data.details);
                            errorMessage.textContent = "A fatal error occurred while loading the stream.";
                            hls.destroy();
                            break;
                    }
                } else {
                    console.warn("Non-fatal error occurred:", data.details);

                    if (data.details === Hls.ErrorDetails.BUFFER_STALLED_ERROR) {
                        console.warn("Buffer stalled error, attempting to recover...");
                        hls.startLoad(); // Restart the load process
                        video.play().catch(error => {
                            console.error("Playback error while recovering:", error);
                        });
                    } else if (data.details === Hls.ErrorDetails.FRAG_LOAD_ERROR || data.details === Hls.ErrorDetails.FRAG_LOAD_TIMEOUT) {
                        console.warn("Fragment load error, retrying...");
                        hls.startLoad();
                    }
                }
            });

            hls.on(Hls.Events.FRAG_LOADED, function (event, data) {
                console.log("Fragment loaded:", data);
            });

            hls.on(Hls.Events.FRAG_PARSING_INIT_SEGMENT, function (event, data) {
                console.log("Init segment parsed:", data);
            });

            hls.on(Hls.Events.BUFFER_RESET, function () {
                console.log("Buffer reset");
            });

            hls.on(Hls.Events.LEVEL_LOADING, function () {
                console.log("Level loading");
            });

            hls.on(Hls.Events.LEVEL_UPDATED, function (event, data) {
                console.log("Level updated:", data);
            });

            hls.on(Hls.Events.LEVEL_PTS_UPDATED, function (event, data) {
                console.log("Level PTS updated:", data);
            });

            hls.on(Hls.Events.FRAG_CHANGED, function (event, data) {
                console.log("Fragment changed:", data);
            });

            hls.on(Hls.Events.BUFFER_APPENDING, function (event, data) {
                console.log("Buffer appending:", data);
            });

            hls.on(Hls.Events.BUFFER_APPENDED, function (event, data) {
                console.log("Buffer appended:", data);
            });
        } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
            video.src = url;
            video.addEventListener('canplay', function () {
                video.play().catch(error => {
                    console.error("Playback error:", error);
                    errorMessage.textContent = "Playback error: " + error.message;
                });
            });
        } else {
            console.error("HLS is not supported by your browser.");
            errorMessage.textContent = "HLS is not supported by your browser.";
        }
    });
});
