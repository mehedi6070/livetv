<?php ?>
<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Mehedi Internet</title>

<script src="https://cdn.jsdelivr.net/npm/hls.js@1.6.13/dist/hls.min.js"></script>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
}

body{
    background:#070b0f;
    color:#fff;
    font-family:Arial,Helvetica,sans-serif;
}

button,input{
    font-family:inherit;
}

a{
    text-decoration:none;
    color:inherit;
}

/* ================= HEADER ================= */

.header{
    width:100%;
    background:#0b1015;
    border-bottom:1px solid #202830;
    padding:10px 18px;
    position:sticky;
    top:0;
    z-index:1000;
}

.header-inner{
    max-width:1400px;
    margin:auto;
    display:flex;
    align-items:center;
    gap:18px;
}

/* LOGO */

.brand{
    display:flex;
    align-items:center;
    gap:9px;
    min-width:max-content;
    cursor:pointer;
}

.brand-icon{
    width:38px;
    height:30px;
    position:relative;
    display:flex;
    align-items:center;
    justify-content:center;
}

.tv-screen{
    width:34px;
    height:25px;
    border:2px solid #ff2020;
    border-radius:5px;
    background:#111820;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    line-height:1;
    box-shadow:0 0 10px rgba(255,20,20,.25);
}

.tv-live{
    color:#ff2424;
    font-size:7px;
    font-weight:900;
    letter-spacing:.5px;
}

.tv-label{
    color:#fff;
    font-size:10px;
    font-weight:900;
}

.tv-live-dot{
    width:4px;
    height:4px;
    background:#ff2020;
    border-radius:50%;
    position:absolute;
    top:5px;
    right:5px;
}

.tv-antenna{
    width:9px;
    height:2px;
    background:#ff2020;
    position:absolute;
    top:0;
}

.tv-antenna.left{
    transform:rotate(-35deg);
    left:5px;
}

.tv-antenna.right{
    transform:rotate(35deg);
    right:5px;
}

.brand-name{
    font-size:19px;
    font-weight:800;
    color:#fff;
    white-space:nowrap;
}

.brand-name span{
    color:#ff2424;
}

/* SEARCH */

.search-box{
    flex:1;
    max-width:500px;
    margin:auto;
}

.search-box input{
    width:100%;
    height:38px;
    border-radius:20px;
    border:1px solid #29333c;
    outline:none;
    background:#12181e;
    color:#fff;
    padding:0 17px;
    font-size:14px;
}

.search-box input:focus{
    border-color:#ff2222;
}

/* STATS */

.stats{
    display:flex;
    align-items:center;
    gap:9px;
}

.stat{
    background:#11171d;
    border:1px solid #273039;
    border-radius:8px;
    padding:6px 10px;
    text-align:center;
    min-width:74px;
}

.stat small{
    display:block;
    color:#8d99a3;
    font-size:9px;
}

.stat strong{
    color:#ff2929;
    font-size:13px;
}

/* ================= MAIN ================= */

.container{
    width:100%;
    max-width:1400px;
    margin:auto;
    padding:15px;
}

/* ================= PLAYER ================= */

.player-wrap{
    display:flex;
    justify-content:center;
}

.player-card{
    width:100%;
    max-width:1000px;
    overflow:hidden;
    background:#050708;
    border:1px solid #202830;
    border-radius:8px;
    box-shadow:0 10px 30px rgba(0,0,0,.35);
}

video{
    width:100%;
    display:block;
    aspect-ratio:16/9;
    object-fit:contain;
    background:#000;
}

/* ================= NOW PLAYING ================= */

.now-playing{
    max-width:1000px;
    margin:7px auto 0;
    background:#0d1318;
    border:1px solid #202830;
    border-radius:7px;
    padding:7px 10px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:10px;
}

.now-info{
    min-width:0;
}

.now-info small{
    color:#7f8a93;
    font-size:10px;
}

.now-title{
    color:#fff;
    font-size:14px;
    font-weight:700;
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
}

.now-meta{
    color:#ff2929;
    font-size:10px;
}

.nav-buttons{
    display:flex;
    gap:5px;
    flex-shrink:0;
}

.nav-buttons button{
    border:0;
    background:#111;
    color:#fff;
    border:1px solid #2b343c;
    border-radius:5px;
    padding:6px 11px;
    cursor:pointer;
    font-size:11px;
    font-weight:bold;
}

.nav-buttons button:hover{
    background:#ff2020;
    border-color:#ff2020;
}

/* ================= CONTACT ================= */

.contact-box{
    max-width:1000px;
    margin:7px auto 0;
    height:35px;
    overflow:hidden;
    display:flex;
    align-items:center;
    background:#100d0d;
    border:1px solid #332020;
    border-radius:6px;
}

.contact-label{
    background:#ff2020;
    height:100%;
    display:flex;
    align-items:center;
    padding:0 12px;
    font-size:11px;
    font-weight:bold;
    z-index:2;
    white-space:nowrap;
}

.marquee{
    overflow:hidden;
    flex:1;
    white-space:nowrap;
}

.marquee span{
    display:inline-block;
    padding-left:100%;
    animation:moveText 18s linear infinite;
    color:#fff;
    font-size:12px;
    font-weight:600;
}

@keyframes moveText{
    0%{
        transform:translateX(0);
    }
    100%{
        transform:translateX(-100%);
    }
}

/* ================= CHANNEL SECTION ================= */

.channels-section{
    margin-top:7px;
    background:#0b1015;
    border:1px solid #202830;
    border-radius:7px;
    padding:10px;
}

.section-head{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:8px;
}

.section-title{
    font-size:15px;
    font-weight:800;
}

.section-title span{
    color:#ff2222;
}

.total{
    font-size:11px;
    color:#89949d;
}

/* CHANNEL GRID */

.channel-grid{
    display:grid;
    grid-template-columns:repeat(7,minmax(0,1fr));
    gap:6px;
}

.channel-card{
    min-height:60px;
    padding:6px;
    background:#10161b;
    border:1px solid #222c34;
    border-radius:6px;
    cursor:pointer;
    display:flex;
    flex-direction:column;
    justify-content:center;
    transition:.15s;
}

.channel-card:hover{
    border-color:#ff2020;
    background:#161c21;
    transform:translateY(-1px);
}

.channel-card.active{
    border-color:#ff2020;
    background:#1a1111;
    box-shadow:inset 0 0 0 1px rgba(255,32,32,.15);
}

.channel-name{
    font-size:11px;
    font-weight:700;
    color:#fff;
    line-height:1.3;
    display:-webkit-box;
    -webkit-line-clamp:2;
    -webkit-box-orient:vertical;
    overflow:hidden;
}

.channel-cat{
    margin-top:3px;
    color:#ff2828;
    font-size:8px;
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
}

/* ================= FOOTER ================= */

.footer{
    text-align:center;
    padding:15px 10px;
    color:#68737c;
    font-size:10px;
}

/* ================= TABLET ================= */

@media(max-width:1050px){

    .channel-grid{
        grid-template-columns:repeat(5,minmax(0,1fr));
    }

    .header-inner{
        gap:10px;
    }

    .brand-name{
        font-size:17px;
    }

    .stats{
        gap:5px;
    }
}

/* ================= MOBILE ================= */

@media(max-width:700px){

    .header{
        padding:8px 10px;
    }

    .header-inner{
        flex-wrap:wrap;
        gap:8px;
    }

    .brand{
        order:1;
    }

    .brand-icon{
        width:32px;
        height:27px;
        transform:scale(.9);
    }

    .brand-name{
        font-size:15px;
    }

    .search-box{
        order:3;
        flex-basis:100%;
        max-width:none;
    }

    .search-box input{
        height:35px;
        font-size:12px;
    }

    .stats{
        order:2;
        margin-left:auto;
    }

    .stat{
        min-width:61px;
        padding:5px 6px;
    }

    .stat small{
        font-size:8px;
    }

    .stat strong{
        font-size:11px;
    }

    .container{
        padding:8px;
    }

    .player-card{
        max-width:100%;
        border-radius:6px;
    }

    video{
        aspect-ratio:16/9;
    }

    .now-playing{
        margin-top:5px;
        padding:6px 7px;
    }

    .now-title{
        font-size:12px;
    }

    .nav-buttons button{
        padding:5px 8px;
        font-size:10px;
    }

    .contact-box{
        margin-top:5px;
        height:32px;
    }

    .contact-label{
        padding:0 8px;
        font-size:9px;
    }

    .marquee span{
        font-size:10px;
    }

    .channels-section{
        margin-top:5px;
        padding:7px;
    }

    .section-title{
        font-size:13px;
    }

    .channel-grid{
        grid-template-columns:repeat(3,minmax(0,1fr));
        gap:5px;
    }

    .channel-card{
        min-height:58px;
        padding:5px 4px;
    }

    .channel-name{
        font-size:10px;
    }

    .channel-cat{
        font-size:7px;
    }
}

/* ================= SMALL MOBILE ================= */

@media(max-width:420px){

    .channel-grid{
        grid-template-columns:repeat(2,minmax(0,1fr));
    }

    .stats{
        gap:3px;
    }

    .stat{
        min-width:58px;
    }

    .brand-name{
        font-size:14px;
    }
}
</style>
</head>

<body>

<!-- ================= HEADER ================= -->

<header class="header">
    <div class="header-inner">

        <a href="./" class="brand" aria-label="Home">

            <span class="brand-icon">

                <span class="tv-screen">
                    <span class="tv-live-dot"></span>
                    <span class="tv-live">LIVE</span>
                    <span class="tv-label">TV</span>
                </span>

                <span class="tv-antenna left"></span>
                <span class="tv-antenna right"></span>

            </span>

            <span class="brand-name">
                Mehedi <span>Internet</span>
            </span>

        </a>

        <div class="search-box">
            <input
                type="text"
                id="searchInput"
                placeholder="চ্যানেল খুঁজুন..."
                oninput="renderChannels()"
            >
        </div>

        <div class="stats">

            <div class="stat">
                <small>Online</small>
                <strong id="onlineCount">0</strong>
            </div>

            <div class="stat">
                <small>Today</small>
                <strong id="visitCount">0</strong>
            </div>

        </div>

    </div>
</header>


<!-- ================= MAIN ================= -->

<main class="container">

    <!-- PLAYER -->

    <div class="player-wrap">

        <div class="player-card">

            <video
                id="video"
                controls
                playsinline
                preload="metadata">
            </video>

        </div>

    </div>


    <!-- NOW PLAYING -->

    <div class="now-playing">

        <div class="now-info">

            <small>Now Playing</small>

            <div class="now-title" id="nowTitle">
                Channel Select করুন
            </div>

            <div class="now-meta" id="nowMeta">
                Mehedi Internet Live TV
            </div>

        </div>

        <div class="nav-buttons">

            <button onclick="prevChannel()">
                ◀ PREV
            </button>

            <button onclick="nextChannel()">
                NEXT ▶
            </button>

        </div>

    </div>


    <!-- CONTACT TICKER -->

    <div class="contact-box">

        <div class="contact-label">
            CONTACT
        </div>

        <div class="marquee">
            <span>
                মেহেদী ইন্টারনেট সংযোগ নেওয়ার জন্য যোগাযোগ করুন  ০১৬২৬৮৮৬০৭০
            </span>
        </div>

    </div>


    <!-- ALL CHANNELS -->

    <section class="channels-section">

        <div class="section-head">

            <div class="section-title">
                <span>All</span> Channels
            </div>

            <div class="total">
                Total Channels:
                <span id="channelTotal">0</span>
            </div>

        </div>

        <div
            class="channel-grid"
            id="channelGrid">
        </div>

    </section>

</main>


<footer class="footer">
    © Mehedi Internet
</footer>


<script>

/* ================= SETTINGS ================= */

const PLAYLIST_FILE = "channels.m3u";

const PROXY =
"https://mehedi-iptv-proxy.mehediofficial60.workers.dev/?url=";


/* ================= PLAYER ================= */

const video = document.getElementById("video");

let hls = null;

let channels = [];

let currentIndex = -1;


/* ================= M3U PARSER ================= */

function parseM3U(text){

    const lines =
        text
        .replace(/\r/g,"")
        .split("\n")
        .map(x => x.trim())
        .filter(Boolean);

    const result = [];

    let current = null;

    for(let line of lines){

        if(line.startsWith("#EXTINF:")){

            const namePart =
                line.substring(line.lastIndexOf(",") + 1).trim();

            const groupMatch =
                line.match(/group-title="([^"]*)"/i);

            current = {
                name:namePart || "Unknown Channel",
                group:groupMatch ? groupMatch[1] : "General",
                url:""
            };

        }

        else if(
            current &&
            !line.startsWith("#")
        ){

            current.url = line;

            if(current.url){

                result.push(current);

            }

            current = null;
        }
    }

    return result;
}


/* ================= PLAY CHANNEL ================= */

function playChannel(index){

    if(!channels.length) return;

    if(index < 0)
        index = channels.length - 1;

    if(index >= channels.length)
        index = 0;

    currentIndex = index;

    const ch = channels[index];

    document.getElementById("nowTitle").textContent =
        ch.name;

    document.getElementById("nowMeta").textContent =
        ch.group || "Live TV";

    document
        .querySelectorAll(".channel-card")
        .forEach((el,i)=>{

            el.classList.toggle(
                "active",
                i === currentIndex
            );

        });


    /* DESTROY PREVIOUS HLS */

    if(hls){

        try{
            hls.destroy();
        }catch(e){}

        hls = null;
    }


    video.pause();

    video.removeAttribute("src");

    video.load();


    /* PROXY URL */

    const streamURL =
        PROXY + encodeURIComponent(ch.url);


    /* HLS.JS */

    if(
        window.Hls &&
        Hls.isSupported()
    ){

        hls = new Hls({

            enableWorker:true,

            lowLatencyMode:true,

            backBufferLength:30,

            maxBufferLength:10,

            maxMaxBufferLength:20,

            liveSyncDurationCount:3,

            liveMaxLatencyDurationCount:6,

            manifestLoadingMaxRetry:4,

            levelLoadingMaxRetry:4,

            fragLoadingMaxRetry:4

        });


        hls.loadSource(streamURL);

        hls.attachMedia(video);


        hls.on(
            Hls.Events.MANIFEST_PARSED,
            function(){

                video.play().catch(()=>{});

            }
        );


        hls.on(
            Hls.Events.ERROR,
            function(event,data){

                if(!data.fatal) return;

                if(data.type === Hls.ErrorTypes.NETWORK_ERROR){

                    hls.startLoad();

                }

                else if(
                    data.type ===
                    Hls.ErrorTypes.MEDIA_ERROR
                ){

                    hls.recoverMediaError();

                }

                else{

                    try{
                        hls.destroy();
                    }catch(e){}

                    hls = null;

                }

            }
        );

    }

    /* NATIVE HLS */

    else if(
        video.canPlayType(
            "application/vnd.apple.mpegurl"
        )
    ){

        video.src = streamURL;

        video.play().catch(()=>{});

    }

    else{

        alert(
            "এই ব্রাউজারে HLS playback support নেই।"
        );

    }

}


/* ================= PREV ================= */

function prevChannel(){

    if(!channels.length) return;

    playChannel(currentIndex - 1);

}


/* ================= NEXT ================= */

function nextChannel(){

    if(!channels.length) return;

    playChannel(currentIndex + 1);

}


/* ================= RENDER CHANNELS ================= */

function renderChannels(){

    const grid =
        document.getElementById("channelGrid");

    const search =
        document
        .getElementById("searchInput")
        .value
        .toLowerCase()
        .trim();

    grid.innerHTML = "";

    let shown = 0;

    channels.forEach((ch,index)=>{

        const name =
            (ch.name || "").toLowerCase();

        const group =
            (ch.group || "").toLowerCase();

        if(
            search &&
            !name.includes(search) &&
            !group.includes(search)
        ){

            return;

        }

        const card =
            document.createElement("div");

        card.className =
            "channel-card" +
            (index === currentIndex
                ? " active"
                : "");

        card.innerHTML = `

            <div class="channel-name">
                ${escapeHTML(ch.name)}
            </div>

            <div class="channel-cat">
                ${escapeHTML(ch.group || "Live TV")}
            </div>

        `;

        card.onclick = function(){

            playChannel(index);

        };

        grid.appendChild(card);

        shown++;

    });


    document.getElementById("channelTotal")
        .textContent = shown;

}


/* ================= HTML ESCAPE ================= */

function escapeHTML(str){

    return String(str || "")
        .replace(/&/g,"&amp;")
        .replace(/</g,"&lt;")
        .replace(/>/g,"&gt;")
        .replace(/"/g,"&quot;")
        .replace(/'/g,"&#039;");

}


/* ================= LOAD PLAYLIST ================= */

async function loadPlaylist(){

    try{

        const response =
            await fetch(
                PLAYLIST_FILE + "?v=" + Date.now()
            );

        if(!response.ok){

            throw new Error(
                "Playlist load failed"
            );

        }

        const text =
            await response.text();

        channels =
            parseM3U(text);

        renderChannels();


        if(channels.length){

            playChannel(0);

        }

    }

    catch(error){

        console.error(error);

        document.getElementById("channelGrid")
            .innerHTML = `
                <div style="
                    grid-column:1/-1;
                    padding:20px;
                    text-align:center;
                    color:#ff3333;
                ">
                    channels.m3u লোড করা যাচ্ছে না।
                </div>
            `;

    }

}


/* ================= ONLINE STATS ================= */

async function loadStats(){

    try{

        const response =
            await fetch(
                "online.php?json=1&v=" +
                Date.now(),
                {
                    cache:"no-store"
                }
            );

        if(!response.ok) return;

        const data =
            await response.json();


        if(data.online !== undefined){

            document.getElementById(
                "onlineCount"
            ).textContent = data.online;

        }


        if(data.today !== undefined){

            document.getElementById(
                "visitCount"
            ).textContent = data.today;

        }

    }

    catch(error){

        console.log(
            "Stats error:",
            error
        );

    }

}


/* ================= START ================= */

loadPlaylist();

loadStats();

setInterval(
    loadStats,
    5000
);


/* ================= KEYBOARD ================= */

document.addEventListener(
    "keydown",
    function(e){

        if(e.key === "ArrowLeft"){

            prevChannel();

        }

        if(e.key === "ArrowRight"){

            nextChannel();

        }

    }
);

</script>

</body>
</html>
