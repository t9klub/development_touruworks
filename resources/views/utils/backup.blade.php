<!DOCTYPE html>
<html style="font-size: 10px;font-family: Roboto, Arial, sans-serif;" dark="" darker-dark-theme="" darker-dark-theme-deprecate="" watch-color-update="">
<head>
    <title>Dummy Youtube Chat / Touru Works 2025 Dev.</title>
    <link rel="icon" href="{{asset('/src/svg/work_mouth_white.svg')}}" type="image/icon" >
    {{-- load yt css--}}
     
     <link href="{{ asset('src/css/youtube_dummy_june_2024.css')}} " rel="stylesheet"/>
     <link rel="stylesheet" href="{{ asset('src/css/dummy.css') }}">
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
       
      control-action{ 
        position: fixed;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        z-index: 1000;
      }
 
.button-group {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  margin-bottom: 1px;
}
 
.expand-buttons {
  display: flex;
  flex-direction: column;
  overflow: hidden;
  max-height: 0;
  transition: max-height 0.4s ease;
}
 
.expand-buttons button {
  opacity: 0;
  transform: translateY(-10px);
  transition: opacity 0.3s ease, transform 0.3s ease;
  cursor: pointer;
}
.expand-buttons button,
.primary-button {
  background: #3e3d3f;
  padding: 8px;
  color: white;
  border: rgba(255, 255, 255, 0.1) 1px solid;
  border-radius: 4px 4px 0px 0px;
}
.expand-buttons button {
  border-radius: 0; 
  padding: 8px 5px;
}
 
.expand-buttons button:first-child {
  border-radius: 4px 4px 0 0;
  margin-top: 1px;
}
 
.expand-buttons button:last-child {
  border-radius: 0 0 4px 4px;
}

.primary-button[single]{
  border-radius: 4px;
} 
.main-button {
  background: #3e3d3f;
  padding: 0px 8px;
  color: white;
  border: rgba(255, 255, 255, 0.1) 1px solid;
  border-radius: 0px 0px 4px 4px;
  cursor: pointer;
  z-index: 2;
}

.main-button > svg{
  opacity: 0.7;
}
.expand-buttons button:hover,
.main-button:hover,
.primary-button:hover {
  border: rgba(255, 255, 255, 0.5) 1px solid;
  transition: 300ms;

}
.primary-button > svg{
  opacity: 0.8;
}
.primary-button > svg:hover{
  opacity: 1;
  transition: 300ms;
}
.expand-buttons{
  font-family: 'Doto';
  font-size: 10px;
}
  </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="font-family: Roboto, Arial, sans-serif">
            <yt-live-chat-app>
              <yt-live-chat-renderer class="style-scope yt-live-chat-app" hide-timestamps="" has-ticker="" has-input-action-panel="" style="--scrollbar-width: 15px">
                <yt-live-chat-item-list-renderer class="style-scope yt-live-chat-renderer"> 
                  <div id="contents" class="style-scope yt-live-chat-item-list-renderer">
                   {{-- check ini --}}
                    <div id="items" class="style-scope yt-live-chat-item-list-renderer" style="transform: translateY(0px)" >
                      <yt-live-chat-text-message-renderer class="style-scope yt-live-chat-item-list-renderer" whole-message-clickable="" id="CjkKGkNLZTJsZEd5al80Q0ZVTEJ3Z1FkdDhBQjBBEhtDUHl3bmFDeWpfNENGWTZSY0FvZGR5MFBaQTA%3D" has-inline-action-buttons="3" author-is-owner="" author-type="owner"> <yt-img-shadow id="author-photo" class="no-transition style-scope yt-live-chat-text-message-renderer" height="24" width="24" style="background-color: transparent;" loaded=""> <img id="img" draggable="false" class="style-scope yt-img-shadow" alt="" src="https://lh3.googleusercontent.com/d/1yZr7G20wox796hq5FSUBXjz_JioVcF3R" width="24" height="24"></yt-img-shadow> <div id="content" class="style-scope yt-live-chat-text-message-renderer"><span id="timestamp" class="style-scope yt-live-chat-text-message-renderer">11:32 AM</span> <yt-live-chat-author-chip class="style-scope yt-live-chat-text-message-renderer" is-highlighted=""> <span id="prepend-chat-badges" class="style-scope yt-live-chat-author-chip"></span><span id="author-name" dir="auto" class="owner style-scope yt-live-chat-author-chip">Hi! Owner Channel<span id="chip-badges" class="style-scope yt-live-chat-author-chip"></span></span> <span id="chat-badges" class="style-scope yt-live-chat-author-chip"></span> </yt-live-chat-author-chip>&ZeroWidthSpace;<span id="message" dir="auto" class="style-scope yt-live-chat-text-message-renderer">Hello! Welcome to live house tonight im here present for you the kessoku band</span><span id="deleted-state" class="style-scope yt-live-chat-text-message-renderer"></span> <a id="show-original" href="#" class="style-scope yt-live-chat-text-message-renderer"></a> </div><div id="menu" class="style-scope yt-live-chat-text-message-renderer"> <yt-icon-button id="menu-button" class="style-scope yt-live-chat-text-message-renderer"> <button id="button" class="style-scope yt-icon-button" aria-label="Tindakan chat"><yt-icon icon="more_vert" class="style-scope yt-live-chat-text-message-renderer"><yt-icon-shape class="style-scope yt-icon"><icon-shape class="yt-spec-icon-shape"><div style="width: 100%; height: 100%; fill: currentcolor;"><svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z"></path></svg></div></icon-shape></yt-icon-shape></yt-icon></button> <yt-interaction id="interaction" class="circular style-scope yt-icon-button"> <div class="stroke style-scope yt-interaction"></div><div class="fill style-scope yt-interaction"></div></yt-interaction> </yt-icon-button> </div><div id="inline-action-button-container" class="style-scope yt-live-chat-text-message-renderer" aria-hidden="true"> <div id="inline-action-buttons" class="style-scope yt-live-chat-text-message-renderer"> <yt-button-renderer class="style-scope yt-live-chat-text-message-renderer style-default size-default" is-icon-button="" has-no-text=""> <a class="yt-simple-endpoint style-scope yt-button-renderer" tabindex="-1"> <yt-icon-button id="button" class="style-scope yt-button-renderer style-default size-default"> <button id="button" class="style-scope yt-icon-button" aria-label="Hapus"><yt-icon class="style-scope yt-button-renderer"><yt-icon-shape class="style-scope yt-icon"><icon-shape class="yt-spec-icon-shape"><div style="width: 100%; height: 100%; fill: currentcolor;"><svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M11 17H9V8h2v9zm4-9h-2v9h2V8zm4-4v1h-1v16H6V5H5V4h4V3h6v1h4zm-2 1H7v15h10V5z"></path></svg></div></icon-shape></yt-icon-shape></yt-icon></button> <yt-interaction id="interaction" class="circular style-scope yt-icon-button"> <div class="stroke style-scope yt-interaction"></div><div class="fill style-scope yt-interaction"></div></yt-interaction> </yt-icon-button> </a> </yt-button-renderer> <yt-button-renderer class="style-scope yt-live-chat-text-message-renderer style-default size-default" is-icon-button="" has-no-text=""> <a class="yt-simple-endpoint style-scope yt-button-renderer" tabindex="-1"> <yt-icon-button id="button" class="style-scope yt-button-renderer style-default size-default"> <button id="button" class="style-scope yt-icon-button" aria-label="Masukkan pengguna dalam waktu tunggu"><yt-icon class="style-scope yt-button-renderer"><yt-icon-shape class="style-scope yt-icon"><icon-shape class="yt-spec-icon-shape"><div style="width: 100%; height: 100%; fill: currentcolor;"><svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M18 3h1V2H5v1h1v5.21L9.79 12 6 15.79V21H5v1h14v-1h-1v-5.21L14.21 12 18 8.21Zm-5.21 9L17 16.21V21H7v-4.79L11.21 12 7 7.79V3h10v4.79ZM12 16l4 4H8ZM9 7h6l-3 3Z"></path></svg></div></icon-shape></yt-icon-shape></yt-icon></button> <yt-interaction id="interaction" class="circular style-scope yt-icon-button"> <div class="stroke style-scope yt-interaction"></div><div class="fill style-scope yt-interaction"></div></yt-interaction> </yt-icon-button> </a> </yt-button-renderer> <yt-button-renderer class="style-scope yt-live-chat-text-message-renderer style-default size-default" is-icon-button="" has-no-text=""> <a class="yt-simple-endpoint style-scope yt-button-renderer" tabindex="-1"> <yt-icon-button id="button" class="style-scope yt-button-renderer style-default size-default"> <button id="button" class="style-scope yt-icon-button" aria-label="Sembunyikan pengguna di channel ini"><yt-icon class="style-scope yt-button-renderer"><yt-icon-shape class="style-scope yt-icon"><icon-shape class="yt-spec-icon-shape"><div style="width: 100%; height: 100%; fill: currentcolor;"><svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><g><path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path></g></svg></div></icon-shape></yt-icon-shape></yt-icon></button> <yt-interaction id="interaction" class="circular style-scope yt-icon-button"> <div class="stroke style-scope yt-interaction"></div><div class="fill style-scope yt-interaction"></div></yt-interaction> </yt-icon-button> </a> </yt-button-renderer> </div></div></yt-live-chat-text-message-renderer>
                      <yt-live-chat-paid-message-renderer class="style-scope yt-live-chat-item-list-renderer" modern="" id="ChwKGkNQT2NyNkxYaTRnREZWRFJ3Z1FkeWlrOERB" whole-message-clickable="{&quot;clickTrackingParams&quot;:&quot;CEoQ7rsEIhMI_NCP8teLiAMVQrZjBh0X0gQF&quot;,&quot;commandMetadata&quot;:{&quot;webCommandMetadata&quot;:{&quot;ignoreNavigation&quot;:true}},&quot;liveChatItemContextMenuEndpoint&quot;:{&quot;params&quot;:&quot;Q2g0S0hBb2FRMUJQWTNJMlRGaHBOR2RFUmxaRVVuZG5VV1I1YVdzNFJFRWFLU29uQ2hoVlEzTTRObVkyZEdKWFlYUmpTMVowTjJWdGRqbG9abEVTQ3paalJUTlNXbWxwWVhOQklBSW9CRElhQ2hoVlEwVjZkRzU1ZW5kSk5taHNjVXhUWDBremRTMXhjSGM0QWtnQVVBOCUzRA==&quot;}}" style="--yt-live-chat-paid-message-primary-color: rgba(233,30,99,1); --yt-live-chat-paid-message-secondary-color: rgba(194,24,91,1); --yt-live-chat-paid-message-header-color: rgba(255,255,255,1); --yt-live-chat-paid-message-timestamp-color: rgba(255,255,255,0.5019607843137255); --yt-live-chat-paid-message-color: rgba(255,255,255,1); --yt-live-chat-disable-highlight-message-author-name-color: rgba(255,255,255,0.7019607843137254); --yt-live-chat-text-input-background-color: rgba(0,0,0,0.18823529411764706);" allow-animations="">
  <!--css-build:shady-->
  <!--css-build:shady-->
  <div id="card" class="style-scope yt-live-chat-paid-message-renderer">
    <div id="header" class="style-scope yt-live-chat-paid-message-renderer">
      <yt-img-shadow id="author-photo" class="style-scope yt-live-chat-paid-message-renderer no-transition" style="background-color: transparent;" loaded="">
        <!--css-build:shady-->
        <!--css-build:shady-->
        <img id="img" draggable="false" class="style-scope yt-img-shadow" alt="" width="32" height="32" src="https://lh3.googleusercontent.com/d/1u0gJhDNl1RQiimtQtaiCwK1CVJrkr-w5">
      </yt-img-shadow>
      <dom-if restamp="" class="style-scope yt-live-chat-paid-message-renderer">
        <template is="dom-if"></template>
      </dom-if>
      <dom-if class="style-scope yt-live-chat-paid-message-renderer">
        <template is="dom-if"></template>
      </dom-if>
      <dom-if restamp="" class="style-scope yt-live-chat-paid-message-renderer">
        <template is="dom-if"></template>
      </dom-if>
      <div id="header-content" class="style-scope yt-live-chat-paid-message-renderer">
        <div id="header-content-primary-column" class="style-scope yt-live-chat-paid-message-renderer">
          <div id="single-line" class="style-scope yt-live-chat-paid-message-renderer">
            <div id="author-name-chip" class="style-scope yt-live-chat-paid-message-renderer">
              <yt-live-chat-author-chip disable-highlighting="" single-line="" class="style-scope yt-live-chat-paid-message-renderer">
                <!--css-build:shady-->
                <!--css-build:shady-->
                <span id="prepend-chat-badges" class="style-scope yt-live-chat-author-chip"></span>
                <span id="author-name" dir="auto" class="member single-line style-scope yt-live-chat-author-chip style-scope yt-live-chat-author-chip">Chiefboo ~ <span id="chip-badges" class="style-scope yt-live-chat-author-chip"></span>
                </span>
                <span id="chat-badges" class="style-scope yt-live-chat-author-chip">
                  <yt-live-chat-author-badge-renderer class="style-scope yt-live-chat-author-chip" aria-label="Member (1 year)" type="member" shared-tooltip-text="Member (1 year)">
                    <!--css-build:shady-->
                    <!--css-build:shady-->
                    <div id="image" class="style-scope yt-live-chat-author-badge-renderer">
                      <img src="https://lh3.googleusercontent.com/d/1h-jF969L3szQIncqRBqR_ZiSq4Fd3ar4" class="style-scope yt-live-chat-author-badge-renderer" alt="Member (1 year)">
                    </div>
                  </yt-live-chat-author-badge-renderer>
                </span>
              </yt-live-chat-author-chip>
            </div>
            <div id="purchase-amount-column" class="style-scope yt-live-chat-paid-message-renderer">
              <yt-img-shadow id="currency-img" height="16" width="16" class="style-scope yt-live-chat-paid-message-renderer no-transition" hidden="">
                <!--css-build:shady-->
                <!--css-build:shady-->
                <img id="img" draggable="false" class="style-scope yt-img-shadow" alt="" height="16" width="16">
              </yt-img-shadow>
              <div id="purchase-amount" class="style-scope yt-live-chat-paid-message-renderer">
                <yt-formatted-string class="style-scope yt-live-chat-paid-message-renderer">¥8,000</yt-formatted-string>
              </div>
            </div>
          </div>
        </div>
        <span id="timestamp" class="style-scope yt-live-chat-paid-message-renderer">12:53 AM</span>
        <div id="gradient-container" class="style-scope yt-live-chat-paid-message-renderer">
          <div id="gradient" class="style-scope yt-live-chat-paid-message-renderer"></div>
        </div>
        <div id="menu" class="style-scope yt-live-chat-paid-message-renderer">
          <yt-icon-button id="menu-button" class="style-scope yt-live-chat-paid-message-renderer" role="button">
            <!--css-build:shady-->
            <!--css-build:shady-->
            <button id="button" class="style-scope yt-icon-button" aria-label="Chat actions">
              <yt-icon icon="more_vert" class="style-scope yt-live-chat-paid-message-renderer">
                <!--css-build:shady-->
                <!--css-build:shady-->
                <span class="yt-icon-shape yt-spec-icon-shape">
                  <div style="width: 100%; height: 100%; display: block; fill: currentcolor;">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" aria-hidden="true" style="pointer-events: none; display: inherit; width: 100%; height: 100%;">
                      <path d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z"></path>
                    </svg>
                  </div>
                </span>
              </yt-icon>
            </button>
            <yt-interaction id="interaction" class="circular style-scope yt-icon-button">
              <!--css-build:shady-->
              <!--css-build:shady-->
              <div class="stroke style-scope yt-interaction"></div>
              <div class="fill style-scope yt-interaction"></div>
            </yt-interaction>
          </yt-icon-button>
        </div>
        <div id="creator-heart-button" class="style-scope yt-live-chat-paid-message-renderer">
          <yt-live-chat-creator-heart-view-model class="style-scope yt-live-chat-paid-message-renderer">
            <!--css-build:shady-->
            <!--css-build:shady-->
            <yt-icon-button id="creator-heart-button" class="style-scope yt-live-chat-creator-heart-view-model" role="button" hidden="">
              <!--css-build:shady-->
              <!--css-build:shady-->
              <button id="button" class="style-scope yt-icon-button" aria-label="Heart">
                <dom-if class="style-scope yt-live-chat-creator-heart-view-model">
                  <template is="dom-if"></template>
                </dom-if>
                <dom-if class="style-scope yt-live-chat-creator-heart-view-model">
                  <template is="dom-if"></template>
                </dom-if>
              </button>
              <yt-interaction id="interaction" class="circular style-scope yt-icon-button">
                <!--css-build:shady-->
                <!--css-build:shady-->
                <div class="stroke style-scope yt-interaction"></div>
                <div class="fill style-scope yt-interaction"></div>
              </yt-interaction>
            </yt-icon-button>
          </yt-live-chat-creator-heart-view-model>
        </div>
      </div>
    </div>
    <div id="content" class="style-scope yt-live-chat-paid-message-renderer">
      <div id="message" dir="auto" class="style-scope yt-live-chat-paid-message-renderer">wwwww (´∀｀)</div>
      <div id="input-container" class="style-scope yt-live-chat-paid-message-renderer">
        <dom-if class="style-scope yt-live-chat-paid-message-renderer">
          <template is="dom-if"></template>
        </dom-if>
      </div>
      <yt-formatted-string id="deleted-state" class="style-scope yt-live-chat-paid-message-renderer" is-empty="function(){var e=Oa.apply(0,arguments);a.loggingStatus.currentExternalCall=b;a.loggingStatus.bypassProxyController=!0;var g,k=((g=a.is)!=null?g:a.tagName).toLowerCase();ov(k,b,&quot;PROPERTY_ACCESS_CALL_EXTERNAL&quot;);var m;g=(m=c!=null?c:d[b])==null?void 0:m.call.apply(m,[d].concat(na(e)));a.loggingStatus.currentExternalCall=void 0;a.loggingStatus.bypassProxyController=!1;return g}">
        <!--css-build:shady-->
        <!--css-build:shady-->
        <yt-attributed-string class="style-scope yt-formatted-string"></yt-attributed-string>
      </yt-formatted-string>
      <div id="footer" class="style-scope yt-live-chat-paid-message-renderer"></div>
      <div id="action-buttons" class="style-scope yt-live-chat-paid-message-renderer">
        <div id="like-button" class="action-button style-scope yt-live-chat-paid-message-renderer">
          <yt-live-chat-like-button-view-model class="style-scope yt-live-chat-paid-message-renderer">
            <!--css-build:shady-->
            <!--css-build:shady-->
            <yt-toggle-button-view-model class="style-scope yt-live-chat-like-button-view-model">
              <toggle-button-view-model>
                <button-view-model class="yt-spec-button-view-model">
                  <button class="yt-spec-button-shape-next yt-spec-button-shape-next--tonal yt-spec-button-shape-next--mono yt-spec-button-shape-next--size-xs yt-spec-button-shape-next--icon-leading" style="color: rgb(255, 255, 255); background-color: rgba(255, 255, 255, 0.1);" aria-pressed="false" aria-label="Like" title="">
                    <div class="yt-spec-button-shape-next__icon" aria-hidden="true">
                      <yt-icon style="width: 16px; height: 16px;">
                        <!--css-build:shady-->
                        <!--css-build:shady-->
                        <span class="yt-icon-shape yt-spec-icon-shape">
                          <div style="width: 100%; height: 100%; display: block; fill: currentcolor;">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 16 16" width="16" focusable="false" aria-hidden="true" style="pointer-events: none; display: inherit; width: 100%; height: 100%;">
                              <path d="M12.42,14A1.54,1.54,0,0,0,14,12.87l1-4.24C15.12,7.76,15,7,14,7H10l1.48-3.54A1.17,1.17,0,0,0,10.24,2a1.49,1.49,0,0,0-1.08.46L5,7H1v7ZM9.89,3.14A.48.48,0,0,1,10.24,3a.29.29,0,0,1,.23.09S9,6.61,9,6.61L8.46,8H14c0,.08-1,4.65-1,4.65a.58.58,0,0,1-.58.35H6V7.39ZM2,8H5v5H2Z"></path>
                            </svg>
                          </div>
                        </span>
                      </yt-icon>
                    </div>
                    <div class="yt-spec-button-shape-next__button-text-content">25</div>
                    <yt-touch-feedback-shape style="border-radius: inherit;">
                      <div class="yt-spec-touch-feedback-shape yt-spec-touch-feedback-shape--touch-response" aria-hidden="true">
                        <div class="yt-spec-touch-feedback-shape__stroke" style=""></div>
                        <div class="yt-spec-touch-feedback-shape__fill" style=""></div>
                      </div>
                    </yt-touch-feedback-shape>
                  </button>
                </button-view-model>
              </toggle-button-view-model>
            </yt-toggle-button-view-model>
          </yt-live-chat-like-button-view-model>
        </div>
        <div id="reply-button" class="action-button style-scope yt-live-chat-paid-message-renderer">
          <yt-live-chat-reply-button-view-model class="style-scope yt-live-chat-paid-message-renderer">
            <!--css-build:shady-->
            <!--css-build:shady-->
            <yt-button-view-model class="style-scope yt-live-chat-reply-button-view-model">
              <button-view-model class="yt-spec-button-view-model">
                <button class="yt-spec-button-shape-next yt-spec-button-shape-next--tonal yt-spec-button-shape-next--mono yt-spec-button-shape-next--size-xs yt-spec-button-shape-next--icon-leading" style="color: rgb(255, 255, 255); background-color: rgba(255, 255, 255, 0.1);" aria-label="Reply to this Super Chat along with 11 other people" title="">
                  <div class="yt-spec-button-shape-next__icon" aria-hidden="true">
                    <yt-icon style="width: 16px; height: 16px;">
                      <!--css-build:shady-->
                      <!--css-build:shady-->
                      <span class="yt-icon-shape yt-spec-icon-shape">
                        <div style="width: 100%; height: 100%; display: block; fill: currentcolor;">
                          <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" aria-hidden="true" style="pointer-events: none; display: inherit; width: 100%; height: 100%;">
                            <path d="M16 9H8V7h8v2zm-3 2H8v2h5v-2zm6-8H5v16.59l3.29-3.29.3-.3H19V3m1-1v15H9l-5 5V2h16z"></path>
                          </svg>
                        </div>
                      </span>
                    </yt-icon>
                  </div>
                  <div class="yt-spec-button-shape-next__button-text-content">11</div>
                  <yt-touch-feedback-shape style="border-radius: inherit;">
                    <div class="yt-spec-touch-feedback-shape yt-spec-touch-feedback-shape--touch-response" aria-hidden="true">
                      <div class="yt-spec-touch-feedback-shape__stroke" style=""></div>
                      <div class="yt-spec-touch-feedback-shape__fill" style=""></div>
                    </div>
                  </yt-touch-feedback-shape>
                </button>
              </button-view-model>
            </yt-button-view-model>
          </yt-live-chat-reply-button-view-model>
        </div>
        <div id="buy-button" class="action-button style-scope yt-live-chat-paid-message-renderer"></div>
      </div>
    </div>
  </div>
  <div id="lower-bumper" class="style-scope yt-live-chat-paid-message-renderer"></div>
  <div id="lower-buy-button" class="style-scope yt-live-chat-paid-message-renderer" hidden=""></div>
  <div id="inline-action-button-container" class="style-scope yt-live-chat-paid-message-renderer" aria-hidden="true">
    <div id="inline-action-buttons" class="style-scope yt-live-chat-paid-message-renderer"></div>
  </div>
</yt-live-chat-paid-message-renderer>
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

          <control-action>
            <div class="button-group">
                <button class="primary-button" single id="play">
               <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="#eee" d="M21 11v-1h-1V9h-2V8h-2V7h-1V6h-2V5h-2V4h-1V3H8V2H6V1H3v1H2v20h1v1h3v-1h2v-1h2v-1h1v-1h2v-1h2v-1h1v-1h2v-1h2v-1h1v-1h1v-2zm-2 2h-2v1h-2v1h-1v1h-2v1h-2v1H9v1H7v1H5v1H4V3h1v1h2v1h2v1h1v1h2v1h2v1h1v1h2v1h2z"/></svg>
                </button>
            </div>
            <div class="chat-group">
              <div class="button-group" data-expand-group>
                <button class="primary-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M6 20H1v-2h1v-1h1v-1h1v-2H3V8h1V7h1V6h1V5h2V4h8v1h2v1h1v1h1v1h1v6h-1v1h-1v1h-1v1h-2v1H8v1H6m0-1v-1h1v-1h8v-1h2v-1h1v-1h1V9h-1V8h-1V7h-2V6H9v1H7v1H6v1H5v4h1v3H5v1H4v1Z"/></svg>
                  </button>
                <button class="main-button" data-toggle>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="#eee" d="M20 8v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-2v-1h-1v-1H9v-1H8v-1H7v-1H6v-1H5V9H4V8h1V7h1v1h1v1h1v1h1v1h1v1h1v1h2v-1h1v-1h1v-1h1V9h1V8h1V7h1v1z"/></svg>
                </button>
                <div class="expand-buttons" data-buttons>
                  <button>GEN</button>
                  <button>MEM</button>
                  <button>MOD</button>
                  <button>OWN</button>
                  <button>SUP</button>
                  <button>RNK</button>
                </div>
              </div> 
            </div>
            <div class="supa-group">
              <div class="button-group" data-expand-group>
                <button class="primary-button">
               <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M7 2h8v1h2v1h1v1h1v12h-1v1h-1v1h-2v1H7v-1H5v-1H4v-1H3V5h1V4h1V3h2zm1 14v-1H6v-1H5v2h1v1h2v1h6v-1h2v-1h1v-2h-1v1h-2v1zm0-5v-1H6V9H5v3h2v1h2v1h4v-1h2v-1h2V9h-1v1h-2v1zm1-3v1h4V8h2V7h2V6h-1V5h-2V4H8v1H6v1H5v1h2v1z"/></svg> 
                  </button>
                <button class="main-button" data-toggle>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="#eee" d="M20 8v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-2v-1h-1v-1H9v-1H8v-1H7v-1H6v-1H5V9H4V8h1V7h1v1h1v1h1v1h1v1h1v1h1v1h2v-1h1v-1h1v-1h1V9h1V8h1V7h1v1z"/></svg>
                </button>
                <div class="expand-buttons" data-buttons>
                  <button>BLU</button>
                  <button>CYA</button>
                  <button>GRE</button>
                  <button>YEL</button>
                  <button>ORA</button>
                  <button>PIN</button>
                  <button>RED</button>
                  
                </div>
              </div> 
            </div> 
            <div class="supa-group">
              <div class="button-group" data-expand-group>
                <button class="primary-button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M3 7h3V6h1V5h1V4H7V3H6V2h1V1h1v1h1v1h1v1h2V3h1V2h1V1h1v1h1v1h-1v1h-1v1h1v1h1v1h3v2h-2v2h2v2h-2v2h2v2h-3v1h-1v1h-1v1H8v-1H7v-1H6v-1H3v-2h2v-2H3v-2h2V9H3zm10 11v-1h1v-1h1V8h-1V7h-1V6H9v1H8v1H7v8h1v1h1v1zm-4-5h4v2H9zm0-4h4v2H9z"/></svg>
                  </button>
                <button class="main-button" data-toggle>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="#eee" d="M20 8v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-2v-1h-1v-1H9v-1H8v-1H7v-1H6v-1H5V9H4V8h1V7h1v1h1v1h1v1h1v1h1v1h1v1h2v-1h1v-1h1v-1h1V9h1V8h1V7h1v1z"/></svg>
                </button>
                <div class="expand-buttons" data-buttons>
                  <button>BLU</button>
                  <button>CYA</button>
                  <button>GRE</button>
                  <button>YEL</button>
                  <button>ORA</button>
                  <button>RED</button>
                </div>
              </div> 
            </div> 
            <div class="button-group">
                <button class="primary-button" single><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M12 9h-2V8H9V6h1V5h2v1h1v2h-1m3 5H7v-2h1v-1h6v1h1M3 16h1v-1h15V3H3M2 21H1V2h1V1h18v1h1v14h-1v1H5v1H4v1H3v1H2Z"/></svg>
                </button>
            </div>
            <div class="button-group">
                <button class="primary-button" single>
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M19 19H3v-1H2V4h1V3h16v1h1v14h-1M18 8V5H4v3m8 4v-2h-2v2m8 5v-7h-4v3h-1v1H9v-1H8v-3H4v7Z"/></svg>
                </button>
            </div>
          </div>
        </div>
      </control-action>
    </body>
        <script> 
        // inisialisasi boy
      const container = document.getElementById("items");
        
      const playButton = document.getElementById('play');
      const btnstarts = document.getElementById('startss');
      const btnpause = document.getElementById('pause');
      const btnclear = document.getElementById('clear');
      
      const btnsupa = document.getElementById('supa');
      const btnmember = document.getElementById('member');
      const btnsticker = document.getElementById('sticker');
          const btngiveaway = document.getElementById('giveaway');
    (i = 0), (a = 0);
      const container_reaction = document.getElementById("emoji-container");
        playButton.addEventListener('click', () => {
          
          setInterval(renderReaction, 3000);
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
                renderReaction(); 
              }
              else if(i%7 == 0){
                renderMember();  
              }
              else if(i%9 == 0 ){
                renderGift();
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
        });

//     btnstarts.onclick = () => {
//       btnstarts.style.display = 'none';
//       btnpause.style.display = 'block';
      
//       setInterval(renderReaction, 3000);
//       if (a == 0) {
//         a = a + 1;
//         // console.log(i);
//         c = setInterval(start, 800);
//         function start() { 
//           i++; 
//           if(i >= 100){
//             container.innerHTML = ""; 
//             container_reaction.innerHTML ="";
//             i = 0;
//           }else{
//             if(i%6 == 0){
//             renderSuppa(); 
//             renderReaction(); 
//           }
//           else if(i%7 == 0){
//             renderMember();  
//           }
//           else if(i%9 == 0 ){
//             renderGift();
//           }
//           else if(i%10 ==0){    
//           }
//           else if(i%13 == 0 ){
//              renderSticker();  
//           }else{ 
//             renderChat();
//           } 
//           }
//         }
//       }
//     };

//     document.getElementById('toggle-btn').addEventListener('click', () => {
//   const expand = document.getElementById('expand-buttons');
//   const isOpen = expand.classList.toggle('open');

//   if (isOpen) {
//     expand.style.maxWidth = '300px';
//     const buttons = expand.querySelectorAll('button');
//     buttons.forEach((btn, i) => {
//       setTimeout(() => {
//         btn.style.opacity = '1';
//         btn.style.transform = 'translateX(0)';
//       }, i * 50);
//     });
//   } else {
//     const buttons = expand.querySelectorAll('button');
//     buttons.forEach((btn) => {
//       btn.style.opacity = '0';
//       btn.style.transform = 'translateX(-20px)';
//     });
//     setTimeout(() => {
//       expand.style.maxWidth = '0';
//     }, 300);
//   }
// });

//       const dropdownBtn = document.getElementById("btn");
//       const dropdownMenu = document.getElementById("dropdown");
//       const toggleArrow = document.getElementById("arrow");
//       const toggleDropdown = function () {
//         dropdownMenu.classList.toggle("show");
//         // toggleArrow.classList.toggle("arrow");
//       };
//       dropdownBtn.addEventListener("click", function (e) {
//         e.stopPropagation();
//         toggleDropdown();
//       });
 
//     (i = 0), (a = 0);
  
//     const container = document.getElementById("items");

//     const btnstarts = document.getElementById('startss');
//     const btnpause = document.getElementById('pause');
//     const btnclear = document.getElementById('clear');
    
//     const btnsupa = document.getElementById('supa');
//     const btnmember = document.getElementById('member');
//     const btnsticker = document.getElementById('sticker');
//     const btngiveaway = document.getElementById('giveaway');

//     const container_reaction = document.getElementById("emoji-container");

//     btnsupa.onclick = () =>{
//       renderSuppa(); 
//     }
//     btnmember.onclick = () =>{
//       renderMember(); 
//     }
//     btnsticker.onclick = () =>{
//       renderSticker(); 
//     }
//     btngiveaway.onclick = () =>{
//       renderGift(); 
//     }
//     var c = 0;

//     btnpause.onclick = () => {
//       hidePlay();
//       if (a == 1) {
//         a = a - 1;
//         clearInterval(c);
//       }
//     }

//     btnclear.onclick = () =>{
//       i = 0;
//       a = 0;
//       container.innerHTML = ""; 
//       if(c !== null){
//         clearInterval(c);
//       }
//       hidePlay();
//     }

//     function hidePlay(){
//       btnpause.style.display = 'none';
//       btnstarts.style.display = 'block';
//     }
    
    function renderChat() {
   
        const randomItem = chats[Math.floor(Math.random() * chats.length)];
        const container = document.getElementById("items");
        container.insertAdjacentHTML('beforeend', randomItem);
        }


    function renderSuppa() {
      const randomItem = superchat[Math.floor(Math.random() * superchat.length)];

        const container = document.getElementById("items");
                
        container.insertAdjacentHTML('beforeend', randomItem);
    }

    function renderGift() {
      const gifts = gift;
      const randomItem = gift[Math.floor(Math.random() * gift.length)];

        const container = document.getElementById("items");
        
        container.insertAdjacentHTML('beforeend', randomItem);
      const items = giftRec;
      items.forEach((item, index) => {
        setTimeout(() => {
          
        container.insertAdjacentHTML('beforeend', item);
        }, (index + 1) * 100);  
      });
    }

    function renderReaction(){
      const reaction = reaction_live;
      reaction.forEach((item,index) =>{
        setTimeout(() => {
          
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
    }
 document.addEventListener('DOMContentLoaded', function () {
    const groups = document.querySelectorAll('[data-expand-group]');

    groups.forEach((group) => {
      const toggleBtn = group.querySelector('[data-toggle]');
      const buttonsContainer = group.querySelector('[data-buttons]');
      const buttons = buttonsContainer.querySelectorAll('button');

      let expanded = false;

      toggleBtn.addEventListener('click', () => {
        expanded = !expanded;

        if (expanded) {
          buttonsContainer.style.maxHeight = (buttons.length * 40 + (buttons.length - 1) * 8) + 'px';
          buttons.forEach((btn, i) => {
            setTimeout(() => {
              btn.style.opacity = '1';
              btn.style.transform = 'translateY(0)';
            }, i * 50);
          });
        } else {
          buttons.forEach((btn) => {
            btn.style.opacity = '0';
            btn.style.transform = 'translateY(-10px)';
          });
          setTimeout(() => {
            buttonsContainer.style.maxHeight = '0';
          }, 300);
        }
      });
    });
  });

      </script>
</html>