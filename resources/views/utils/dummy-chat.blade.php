<!DOCTYPE html>
<html style="font-size: 10px;font-family: Roboto, Arial, sans-serif;" dark="" darker-dark-theme="" darker-dark-theme-deprecate="" watch-color-update="">
<head>
    <title>Dummy Youtube Chat / Touru Works 2024 Dev.</title>
    <link rel="icon" href="{{asset('/src/svg/work_mouth_white.svg')}}" type="image/icon" >
    {{-- load yt css--}}
     
     <link href="{{ asset('src/css/youtube_dummy_june_2024.css')}} " rel="stylesheet"/>
     <script src="{{ asset('src/js/dummy/chats.js') }}"></script>
     <script src="{{ asset('src/js/dummy/sticker.js') }}"></script>
     <script src="{{ asset('src/js/dummy/superchat.js') }}"></script>
     <script src="{{ asset('src/js/dummy/gift.js') }}"></script>
     <script src="{{ asset('src/js/dummy/giftReceiver.js') }}"></script>
     <script src="{{ asset('src/js/dummy/member.js') }}"></script>
     <script src="{{ asset('src/js/dummy/reaction.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style> 
        body {
          color: #000;
          padding: 0 !important;
          background: #171618;
          margin: 0;
          overflow-y: scroll;
          overflow: hidden;
        }
      
        .group_btn{
          position: fixed;
          position: absolute;
          left: 5%;
          top: 5%;
          
        z-index: 999; 
        }
        .group_clear{
          position: absolute;
          right:  5%;
          top: 5%;
          
        z-index: 999; 
        }
      
        .button {
        border: none;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;  
        opacity: 0.7;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 24px;
      }
      .sm{
        transform: scale(0.5);
      }
       
      .start{
        background-color: #1a6549;  
        animation: pulse 2s infinite;
      }
      .pause{
        background-color: #aa0428;  
        animation: pulse 2s infinite;
      }
      .clear{
        background-color:  #4104aa; 
      }
      .supa-btn{
        background-color:  #04aa36; 
      }
      .member-btn{
        background-color:  #046aaa; 
      }
      .sticker-btn{
        background-color:  #aaa504; 
      }
      .ga-btn{
        background-color:  #aa0478; 
      }
      .button:hover{
        opacity: 1;
      }
      
        body.autoscroll {
          overflow-y: auto;
        }
      
        body.no-scroll {
          overflow: hidden;
        }
      
        body.no-y-scroll {
          overflow-y: hidden;
        }
      
        .hidden {
          display: none;
        }
      
        textarea {
          --paper-input-container-input_-_white-space: pre-wrap;
        }
      
        .grecaptcha-badge {
          visibility: hidden;
        }
        @media only screen and (min-height: 200vh) {
          .button {scale: 0.5;}
         
        }
      
        yt-live-chat-renderer {
          height: 100vh;
          align-content: flex-end;
          /*background-color: var(--yt-live-chat-background-color);*/
          background-color: transparent;
        }
      
        yt-live-chat-text-message-renderer[author-is-owner] {
          background-color: transparent;
        }
      
        yt-live-chat-renderer #contents {
          align-content: flex-end;
          flex-direction: column-reverse !important;
        }
      
        yt-live-chat-renderer #menu {
          display: none;
        }
      
        #items.yt-live-chat-item-list-renderer {
          flex: none !important;
        }
      
        div#menu {
          /* display: none !important; */
        }
      
        @keyframes pulse {
          0% {
              transform: scale(0.95);
              box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
          }
      
          70% {
              transform: scale(1.1);
              box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
          }
      
          100% {
              transform: scale(0.95);
              box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
          }
      }
      ul {
        list-style-type: none;
      }
      .dropbtn {
        border: none;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;  
        opacity: 0.7;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 24px;
        background-color: #303030;
      }
      .btn {
        border: none;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;  
        opacity: 0.7;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 24px;
        background-color: #303030;
        opacity: 0.7;
        }
        .btn:hover{
          opacity: 1;
        }
        .bx {
          font-size: 1.1rem;
        }

        .dropdown {
          position: absolute;
          width: 250px;
          /* box-shadow: var(--shadow); */
          /* border-radius: var(--radius); */
          background:transparent;
        }

        .dropdown a {
          display: flex;
          align-items: center;
          column-gap: var(--gap);
          text-decoration: none;
          color: black;
        }

        .dropdown a:hover {
          background-color: var(--color);
          color: white;
        }
        .dropdown {
          position: absolute;
          width: 250px;
          box-shadow: var(--shadow);
          border-radius: var(--radius);
          margin-top: 0.3rem;
          background: transparent;
          transition: all 0.1s cubic-bezier(0.16, 1, 0.5, 1);
            
          transform: translateY(0.5rem);
          visibility: hidden;
          opacity: 0;
        }

        .show {
          transform: translateY(0rem);
          visibility: visible;
          opacity: 1;
        }

        .arrow {
          transform: rotate(180deg);
          transition: 0.2s ease;
        }
      </style> 
</head>
<body style="font-family: Roboto, Arial, sans-serif">
            <yt-live-chat-app>
              <yt-live-chat-renderer class="style-scope yt-live-chat-app" hide-timestamps="" has-ticker="" has-input-action-panel="" style="--scrollbar-width: 15px">
                <yt-live-chat-item-list-renderer class="style-scope yt-live-chat-renderer"> 
                  <div id="contents" class="style-scope yt-live-chat-item-list-renderer">
              
                    <div class="group_btn" style="transform: scale(0.8)"> 
                      <button id="startss" class="button start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-play-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" stroke-width="0" fill="currentColor"></path>
                      </svg>
                      </button>
                      <button id="pause" class="button pause" style="display: none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-pause-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M9 4h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h2a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2z" stroke-width="0" fill="currentColor"></path>
                          <path d="M17 4h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h2a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2z" stroke-width="0" fill="currentColor"></path>
                       </svg>
                      </button>
                    </div>
                    <div class="group_clear" style="transform: scale(0.8)">
                      <button class="btn" id="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-chevron-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M15 11l-3 3l-3 -3"></path>
                          <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18z"></path>
                       </svg>
                      </button>
                      <div class="dropdown" id="dropdown">
                         <ul>
                          <li>
                            <button id="clear" class="button clear" >
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                                <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                             </svg>
                            </button>
                          </li>
                        <li>
                          <button id="supa" class="button supa-btn" >
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                              <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1"></path>
                              <path d="M12 7v10"></path>
                           </svg>
                          </button>   
                        </li>
                        <li>
                          <button id="sticker" class="button sticker-btn " >
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-smile-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.8 10.946a1 1 0 0 0 -1.414 .014a2.5 2.5 0 0 1 -3.572 0a1 1 0 0 0 -1.428 1.4a4.5 4.5 0 0 0 6.428 0a1 1 0 0 0 -.014 -1.414zm-6.19 -5.286l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993zm6 0l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993z" stroke-width="0" fill="currentColor"></path>
                           </svg>
                          </button>
                        </li>
                        <li>
                          <button id="member" class="button member-btn " >
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart-handshake" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                              <path d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25"></path>
                              <path d="M12.5 15.5l2 2"></path>
                              <path d="M15 13l2 2"></path>
                           </svg>
                          </button>
                        </li>
                        <li>
                          <button id="giveaway" class="button ga-btn " >
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-gift" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M3 8m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z"></path>
                              <path d="M12 8l0 13"></path>
                              <path d="M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7"></path>
                              <path d="M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5"></path>
                           </svg>
                          </button>
                        </li>
                      </ul> 
                      </div>
                    </div>
                    <div id="items" class="style-scope yt-live-chat-item-list-renderer" style="transform: translateY(0px)" >
                    </div>
                  </div>
                    {{-- toast container --}}
                </yt-live-chat-item-list-renderer>
                <div id="item-list" class="style-scope yt-live-chat-renderer"></div>
                {{-- start button  reaction--}}
                <div id="reaction-control-panel-overlay" class="style-scope yt-live-chat-renderer">
                  <yt-reaction-control-panel-overlay-view-model class="style-scope yt-live-chat-renderer">
                    <!--css-build:shady--><!--css-build:shady-->
                    <div id="reaction-control-panel" class="style-scope yt-reaction-control-panel-overlay-view-model">
                      <yt-reaction-control-panel-view-model class="style-scope yt-reaction-control-panel-overlay-view-model" is-dark-theme=""><!--css-build:shady--><!--css-build:shady--><div id="hover-area" class="style-scope yt-reaction-control-panel-view-model">
                  <div id="fab-container" class="style-scope yt-reaction-control-panel-view-model">
                    <div id="expanded-buttons" class="style-scope yt-reaction-control-panel-view-model"><yt-reaction-control-panel-button-view-model class="style-scope yt-reaction-control-panel-view-model"><!--css-build:shady--><!--css-build:shady-->
                      <button class="style-scope yt-reaction-control-panel-button-view-model">
                      <yt-image height="24" preserve-height="" preserve-width="" width="24" class="style-scope yt-reaction-control-panel-button-view-model">
                        <img alt="Kirim ❤" width="24" height="24" class="yt-core-image yt-core-image--content-mode-scale-aspect-fill yt-core-image--loaded" src="https://www.youtube.com/s/gaming/emoji/7ff574f2/emoji_u2764.svg"></yt-image>
                    </button>
                </yt-reaction-control-panel-button-view-model>
                <yt-reaction-control-panel-button-view-model class="style-scope yt-reaction-control-panel-view-model">
                  <button class="style-scope yt-reaction-control-panel-button-view-model">
                  <yt-image height="24" preserve-height="" preserve-width="" width="24" class="style-scope yt-reaction-control-panel-button-view-model"><img alt="Kirim 😄" width="24" height="24" class="yt-core-image yt-core-image--content-mode-scale-aspect-fill yt-core-image--loaded" src="https://www.youtube.com/s/gaming/emoji/7ff574f2/emoji_u1f604.svg"></yt-image>
                </button>
                </yt-reaction-control-panel-button-view-model><yt-reaction-control-panel-button-view-model class="style-scope yt-reaction-control-panel-view-model"><!--css-build:shady--><!--css-build:shady--><button class="style-scope yt-reaction-control-panel-button-view-model">
                  <yt-image height="24" preserve-height="" preserve-width="" width="24" class="style-scope yt-reaction-control-panel-button-view-model"><img alt="Kirim 🎉" width="24" height="24" class="yt-core-image yt-core-image--content-mode-scale-aspect-fill yt-core-image--loaded" src="https://www.youtube.com/s/gaming/emoji/7ff574f2/emoji_u1f389.svg"></yt-image>
                </button>
                </yt-reaction-control-panel-button-view-model><yt-reaction-control-panel-button-view-model class="style-scope yt-reaction-control-panel-view-model"><!--css-build:shady--><!--css-build:shady--><button class="style-scope yt-reaction-control-panel-button-view-model">
                  <yt-image height="24" preserve-height="" preserve-width="" width="24" class="style-scope yt-reaction-control-panel-button-view-model"><img alt="Kirim 😳" width="24" height="24" class="yt-core-image yt-core-image--content-mode-scale-aspect-fill yt-core-image--loaded" src="https://www.youtube.com/s/gaming/emoji/7ff574f2/emoji_u1f633.svg"></yt-image>
                </button>
                </yt-reaction-control-panel-button-view-model><yt-reaction-control-panel-button-view-model class="style-scope yt-reaction-control-panel-view-model"><!--css-build:shady--><!--css-build:shady--><button class="style-scope yt-reaction-control-panel-button-view-model">
                  <yt-image height="24" preserve-height="" preserve-width="" width="24" class="style-scope yt-reaction-control-panel-button-view-model"><img alt="Kirim 💯" width="24" height="24" class="yt-core-image yt-core-image--content-mode-scale-aspect-fill yt-core-image--loaded" src="https://www.youtube.com/s/gaming/emoji/7ff574f2/emoji_u1f4af.svg"></yt-image>
                </button>
                </yt-reaction-control-panel-button-view-model></div>
                    <div id="collapsed-button" class="style-scope yt-reaction-control-panel-view-model"><yt-reaction-control-panel-button-view-model class="style-scope yt-reaction-control-panel-view-model"><!--css-build:shady--><!--css-build:shady--><button class="style-scope yt-reaction-control-panel-button-view-model">
                  <yt-image height="24" preserve-height="" preserve-width="" width="24" class="style-scope yt-reaction-control-panel-button-view-model"><img alt="❤" width="24" height="24" class="yt-core-image yt-core-image--content-mode-scale-aspect-fill yt-core-image--loaded" src="https://www.youtube.com/s/gaming/emoji/7ff574f2/emoji_u2764.svg"></yt-image>
                </button>
                </yt-reaction-control-panel-button-view-model></div>
                  </div>
                </div>
                </yt-reaction-control-panel-view-model></div>
                <div id="emoji-fountain" class="style-scope yt-reaction-control-panel-overlay-view-model">
                  <yt-emoji-fountain-view-model class="style-scope yt-reaction-control-panel-overlay-view-model" is-dark-theme="">
                    <!--css-build:shady--><!--css-build:shady-->
                    <div id="fountain-bounds" class="style-scope yt-emoji-fountain-view-model">
                      <div id="emoji-container" class="style-scope yt-emoji-fountain-view-model">
                        {{-- emote stars here --}}
                
                      </div>
                {{-- emote ends here --}} 
                  </div>
                </div></yt-emoji-fountain-view-model></div>
                </yt-reaction-control-panel-overlay-view-model></div>
                {{-- end button --}}
              </yt-live-chat-renderer> 
                <div id="action-panel" class="style-scope yt-live-chat-renderer"></div>
            </yt-live-chat-app>

       
    </body>
    <script> 
      const dropdownBtn = document.getElementById("btn");
      const dropdownMenu = document.getElementById("dropdown");
      const toggleArrow = document.getElementById("arrow");
      const toggleDropdown = function () {
        dropdownMenu.classList.toggle("show");
        // toggleArrow.classList.toggle("arrow");
      };
      dropdownBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        toggleDropdown();
      });
 
    (i = 0), (a = 0);
  
    const container = document.getElementById("items");

    const btnstarts = document.getElementById('startss');
    const btnpause = document.getElementById('pause');
    const btnclear = document.getElementById('clear');
    
    const btnsupa = document.getElementById('supa');
    const btnmember = document.getElementById('member');
    const btnsticker = document.getElementById('sticker');
    const btngiveaway = document.getElementById('giveaway');

    const container_reaction = document.getElementById("emoji-container");

    btnsupa.onclick = () =>{
      renderSuppa(); 
    }
    btnmember.onclick = () =>{
      renderMember(); 
    }
    btnsticker.onclick = () =>{
      renderSticker(); 
    }
    btngiveaway.onclick = () =>{
      renderGift(); 
    }
    var c = 0;
    btnstarts.onclick = () => {
      btnstarts.style.display = 'none';
      btnpause.style.display = 'block';
      
    //   setInterval(renderReaction, 3000);
      if (a == 0) {
        a = a + 1;
        // console.log(i);
        c = setInterval(start, 800);
        function start() { 
          i++; 
          if(i >= 100){
            container.innerHTML = ""; 
            container_reaction.innerHTML ="";
            i = 0;
          }else{
            if(i%6 == 0){
            renderSuppa(); 
            // console.log('superchat appear');
            renderReaction(); 
          }
          else if(i%7 == 0){
            renderMember();  
            // console.log('member appear');
          }
          else if(i%9 == 0 ){
            renderGift();
            // console.log('gift appear');
          }
          else if(i%10 ==0){    
          }
          else if(i%13 == 0 ){
            renderSticker();  
          }else{ 
            renderChat();
          } 
          }
        }
      }
    };

    btnpause.onclick = () => {
      hidePlay();
      if (a == 1) {
        a = a - 1;
        clearInterval(c);
      }
    }

    btnclear.onclick = () =>{
      i = 0;
      a = 0;
      container.innerHTML = ""; 
      if(c !== null){
        clearInterval(c);
      }
      hidePlay();
    }

    function hidePlay(){
      btnpause.style.display = 'none';
      btnstarts.style.display = 'block';
    }
    
    function renderChat() {
   
        const randomItem = chats[Math.floor(Math.random() * chats.length)];
        const container = document.getElementById("items");
        container.insertAdjacentHTML('beforeend', randomItem);
        }


    function renderSuppa() {
      const randomItem = superchat[Math.floor(Math.random() * superchat.length)];

        const container = document.getElementById("items");
        
        // container.innerHTML += randomItem;

        
        container.insertAdjacentHTML('beforeend', randomItem);
    }

    function renderGift() {
      const gifts = gift;
      const randomItem = gift[Math.floor(Math.random() * gift.length)];

        const container = document.getElementById("items");
        // container.innerHTML += randomItem;
        
        container.insertAdjacentHTML('beforeend', randomItem);
      const items = giftRec;
      items.forEach((item, index) => {
        setTimeout(() => {
          // container.innerHTML += item;
          
        container.insertAdjacentHTML('beforeend', item);
        }, (index + 1) * 100);  
      });
    }

    function renderReaction(){
      const reaction = reaction_live;
      reaction.forEach((item,index) =>{
        setTimeout(() => {
          // const newDiv= document.createElement("div");
          // newDiv.innerHTML = item;
          // container_reaction.appendChild(newDiv);
          
          container_reaction.insertAdjacentHTML('beforeend', item);
        }, (index+ 1 ) *100);
      });
     
      setInterval(clearReaction,1000);
    //   clearReaction();
      
    }
    function clearReaction(){
        container_reaction.innerHTML ="";
    }

    function renderMember() {
      const randomItem = member[Math.floor(Math.random() * member.length)];

      const container = document.getElementById("items");
      // container.innerHTML += randomItem;
      
      container.insertAdjacentHTML('beforeend', randomItem);
    }
    function renderSticker() {
      const randomItem = sticker[Math.floor(Math.random() * sticker.length)];

      const container = document.getElementById("items");
      
      container.insertAdjacentHTML('beforeend', randomItem);
    // container.innerHTML += randomItem;
    }
      </script>
</html>