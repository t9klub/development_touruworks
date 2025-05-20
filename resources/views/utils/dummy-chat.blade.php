<!DOCTYPE html>
<html style="font-size: 10px;" dark="" darker-dark-theme="" darker-dark-theme-deprecate="" watch-color-update="">
<head>
    <title>Dummy Youtube Chat / Touru Works 2025 Dev.</title>
    <link rel="icon" href="{{asset('/src/svg/work_mouth_white.svg')}}" type="image/icon" >
    {{-- load yt css--}}
     <link href="{{ asset('src/css/youtube_dummy_june_2024.css')}} " rel="stylesheet"/>
    <!-- CodeMirror CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.65.16/lib/codemirror.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.65.16/theme/darcula.css">
     <link rel="stylesheet" href="{{ asset('src/css/dummy.css') }}">
     <script src="{{ asset('src/js/dummy/chats.js') }}"></script>
     <script src="{{ asset('src/js/dummy/sticker.js') }}"></script>
     <script src="{{ asset('src/js/dummy/superchat.js') }}"></script>
     <script src="{{ asset('src/js/dummy/gift.js') }}"></script>
     <script src="{{ asset('src/js/dummy/giftReceiver.js') }}"></script>
     <script src="{{ asset('src/js/dummy/member.js') }}"></script>
     <script src="{{ asset('src/js/dummy/reaction.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Doto:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <style>
      .popup {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.5s ease, visibility 0.5s ease;
  }

  .popup.show {
    opacity: 1;
    visibility: visible;
  }

  .modal-content,
  .popup-content {
    background-color: #2f2e2f;
    padding: 20px 16px;
    border: 1px solid #ffffff21;
    border-radius: 4px;
    font-family: "Doto", sans-serif;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
  }
  .popup-content {

    text-align: center;
  }
  .ap-y > p,
  .popup-content > p{
    font-size: 12px;
    color: #eee;
    text-shadow: 0 0 3px #eee;
  }

  .hidden {
    display: none;
  }
  .checkbox-container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: row;
    gap: 5px;
    margin-top: 12px;
    }
    .ap-y{ 
      padding: 2px 8px;
      display: flex;
      gap: 5px;
      align-items: center;
      background: #3a393a;
      cursor: pointer;
      opacity: 0.8;
      border: 1px solid #ffffff21;
    }
    .twPrButton:hover,
    .closePopup:hover,
    .ap-y:hover{
      opacity: 1;
      transition: 0.3s all;
    }
    .twPrButton,
    .closePopup{
      background: #3a393a;
      color: #ffffff;
      border: none;
      padding: 5px 10px; 
      cursor: pointer;
      font-family: "Doto", sans-serif;
      font-size: 12px;
      opacity: 0.8;
      border: 1px solid #ffffff21;
    }   /* Modal styles */
.policy{
    background: #3a393a;
      color: #ffffff;
      border: none;
      padding: 5px 10px; 
      cursor: pointer;
      font-family: "Doto", sans-serif;
      font-size: 12px;
      opacity: 0.8;
      border: 1px solid #ffffff21;
      margin-bottom: 6px;
      margin-top: 6px
}
       #preview {
      padding: 20px;
      background: #2a2a2a;
      border: 1px solid #444;
      border-radius: 8px;
    }
    .modal {
      display: none;
      position: fixed;
      z-index: 999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.6);
    }

    .modal-footer{
      display: flex;
      justify-content: space-between;
    }
    .modal-content { 
      margin: 10% auto;
      padding: 10px 20px 20px ;
      border-radius: 8px;
      width: 80%;
      max-width: 700px;
      box-shadow: 0 0 10px #000;

       /* Tambahan untuk membatasi tinggi */
        max-height: 600px;
        overflow-y: auto;
    } 
    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #fff;
      margin-bottom: 10px;
    }

    .modal-close {
      cursor: pointer;
      font-size: 20px;
    }
.twPrButton#closeModalBtn2{
 background-color: #a8a8a8;
 cursor: pointer;
 color: #000000
}
    .CodeMirror {
      border: 1px solid #555;
  max-height: 350px; 
    }
     
  </style>
  @vite(['resources/js/app.js']) 
</head>
<body>
            <yt-live-chat-app>
              <yt-live-chat-renderer class="style-scope yt-live-chat-app" hide-timestamps="" has-ticker="" has-input-action-panel="" style="--scrollbar-width: 15px">
                <yt-live-chat-item-list-renderer class="style-scope yt-live-chat-renderer"> 
                  <div id="contents" class="style-scope yt-live-chat-item-list-renderer">
                   {{-- check ini --}}
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

          <control-action>
            <div class="button-group" data-expand-group="">
              <button class="primary-button" single id="playPause">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="#eee" d="M21 11v-1h-1V9h-2V8h-2V7h-1V6h-2V5h-2V4h-1V3H8V2H6V1H3v1H2v20h1v1h3v-1h2v-1h2v-1h1v-1h2v-1h2v-1h1v-1h2v-1h2v-1h1v-1h1v-2zm-2 2h-2v1h-2v1h-1v1h-2v1h-2v1H9v1H7v1H5v1H4V3h1v1h2v1h2v1h1v1h2v1h2v1h1v1h2v1h2z"/></svg>
              </button>
                <button class="main-button" data-toggle>
                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 24 24"><path fill="#eee" d="M20 8v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-2v-1h-1v-1H9v-1H8v-1H7v-1H6v-1H5V9H4V8h1V7h1v1h1v1h1v1h1v1h1v1h1v1h2v-1h1v-1h1v-1h1V9h1V8h1V7h1v1z"/></svg>
                </button>
                <div class="expand-buttons" data-buttons>
                  {{-- Advanced Action Start --}}

            <div class="chat-group">
              <div class="button-group" data-expand-group>
                <button class="primary-button" id="chatRandom">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M6 20H1v-2h1v-1h1v-1h1v-2H3V8h1V7h1V6h1V5h2V4h8v1h2v1h1v1h1v1h1v6h-1v1h-1v1h-1v1h-2v1H8v1H6m0-1v-1h1v-1h8v-1h2v-1h1v-1h1V9h-1V8h-1V7h-2V6H9v1H7v1H6v1H5v4h1v3H5v1H4v1Z"/></svg>
                  </button>
                <button class="main-button" data-toggle>
                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 24 24"><path fill="#eee" d="M20 8v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-2v-1h-1v-1H9v-1H8v-1H7v-1H6v-1H5V9H4V8h1V7h1v1h1v1h1v1h1v1h1v1h1v1h2v-1h1v-1h1v-1h1V9h1V8h1V7h1v1z"/></svg>
                </button>
                <div class="expand-buttons" data-buttons>
                  <button style="font-family:Doto;font-size:10px;" id="chatGeneral" data-index="4">GEN</button>
                  <button style="font-family:Doto;font-size:10px;" id="chatMember" data-index="1">MEM</button>
                  <button style="font-family:Doto;font-size:10px;" id="chatModerator" data-index="14">MOD</button>
                  <button style="font-family:Doto;font-size:10px;" id="chatModerator" data-index="15">BOT</button>
                  <button style="font-family:Doto;font-size:10px;" id="chatOwner" data-index="7">OWN</button>
                  <button style="font-family:Doto;font-size:10px;" id="chatCommentSupa" data-index="8">SUP</button>
                  <button style="font-family:Doto;font-size:10px;" id="chatRanked" data-index="10">RNK</button>
                  <button style="font-family:Doto;font-size:10px;" id="chatRanked" data-index="12">RN2</button>
                </div>
              </div> 
            </div>
            <div class="supa-group">
              <div class="button-group" data-expand-group>
                <button class="primary-button" id="supaRandom">
               <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M7 2h8v1h2v1h1v1h1v12h-1v1h-1v1h-2v1H7v-1H5v-1H4v-1H3V5h1V4h1V3h2zm1 14v-1H6v-1H5v2h1v1h2v1h6v-1h2v-1h1v-2h-1v1h-2v1zm0-5v-1H6V9H5v3h2v1h2v1h4v-1h2v-1h2V9h-1v1h-2v1zm1-3v1h4V8h2V7h2V6h-1V5h-2V4H8v1H6v1H5v1h2v1z"/></svg> 
                  </button>
                <button class="main-button" data-toggle>
                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 24 24"><path fill="#eee" d="M20 8v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-2v-1h-1v-1H9v-1H8v-1H7v-1H6v-1H5V9H4V8h1V7h1v1h1v1h1v1h1v1h1v1h1v1h2v-1h1v-1h1v-1h1V9h1V8h1V7h1v1z"/></svg>
                </button>
                <div class="expand-buttons" data-buttons>
                  <button style="font-family:Doto;font-size:10px;" id="supaBlue" data-index="1">BLU</button>
                  <button style="font-family:Doto;font-size:10px;" id="supaCyan" data-index="6">CYA</button>
                  <button style="font-family:Doto;font-size:10px;" id="supaGreen" data-index="3">GRE</button>
                  <button style="font-family:Doto;font-size:10px;" id="supaYellow" data-index="9">YEL</button>
                  <button style="font-family:Doto;font-size:10px;" id="supaOrange" data-index="2">ORA</button>
                  <button style="font-family:Doto;font-size:10px;" id="supaPink" data-index="8">PIN</button>
                  <button style="font-family:Doto;font-size:10px;" id="supaRed" data-index="5">RED</button>
                </div>
              </div> 
            </div> 
            <div class="sticker-group">
              <div class="button-group" data-expand-group>
                <button class="primary-button" id="stickerRandom">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M3 7h3V6h1V5h1V4H7V3H6V2h1V1h1v1h1v1h1v1h2V3h1V2h1V1h1v1h1v1h-1v1h-1v1h1v1h1v1h3v2h-2v2h2v2h-2v2h2v2h-3v1h-1v1h-1v1H8v-1H7v-1H6v-1H3v-2h2v-2H3v-2h2V9H3zm10 11v-1h1v-1h1V8h-1V7h-1V6H9v1H8v1H7v8h1v1h1v1zm-4-5h4v2H9zm0-4h4v2H9z"/></svg>
                  </button>
                <button class="main-button" data-toggle>
                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 24 24"><path fill="#eee" d="M20 8v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-1v1h-2v-1h-1v-1H9v-1H8v-1H7v-1H6v-1H5V9H4V8h1V7h1v1h1v1h1v1h1v1h1v1h1v1h2v-1h1v-1h1v-1h1V9h1V8h1V7h1v1z"/></svg>
                </button>
                <div class="expand-buttons" data-buttons>
                  <button style="font-family:Doto;font-size:10px;" id="stickerBlue" data-index="5">BLU</button>
                  <button style="font-family:Doto;font-size:10px;" id="stickerCyan" data-index="0">CYA</button>
                  <button style="font-family:Doto;font-size:10px;" id="stickerGreen" data-index="1">GRE</button>
                  <button style="font-family:Doto;font-size:10px;" id="stickerYellow" data-index="3">YEL</button>
                  <button style="font-family:Doto;font-size:10px;" id="stickerOrange" data-index="2">ORA</button>
                  <button style="font-family:Doto;font-size:10px;" id="stickerPink" data-index="4">PIN</button>
                </div>
              </div> 
            </div> 
            <div class="button-group">
                <button class="primary-button" single id="memberRandom">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M12 9h-2V8H9V6h1V5h2v1h1v2h-1m3 5H7v-2h1v-1h6v1h1M3 16h1v-1h15V3H3M2 21H1V2h1V1h18v1h1v14h-1v1H5v1H4v1H3v1H2Z"/></svg>
                </button>
            </div>
            <div class="button-group">
                <button class="primary-button" single id="giftRandom">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M19 19H3v-1H2V4h1V3h16v1h1v14h-1M18 8V5H4v3m8 4v-2h-2v2m8 5v-7h-4v3h-1v1H9v-1H8v-3H4v7Z"/></svg>
                </button>
            </div> 
                  {{-- Advanced Action Ends --}}
                </div>
            </div>
            <div class="button-group">
              <button class="primary-button" single id="justReset">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M22 11v1h-1v1h-1v1h-1v1h-2v-1h-1v-1h-1v-1h-1v-1h3V9h-1V7h-1V6h-2V5H9v1H7v1H6v2H5v4h1v2h1v1h2v1h4v-1h3v2h-2v1H8v-1H6v-1H5v-1H4v-2H3V8h1V6h1V5h1V4h2V3h6v1h2v1h1v1h1v2h1v3z"/></svg>
                </button>
            </div>
            <div class="button-group">
              <button class="primary-button" single id="openModalBtn">
             <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="#eee" d="M15 4h1v2h-1v3h-1v3h-1v2h-1v3h-1v3h-1v1H9v-1H8v-2h1v-3h1v-3h1v-2h1V7h1V4h1V3h1zm8 7v2h-1v1h-1v1h-1v1h-1v1h-2v-2h1v-1h1v-1h1v-2h-1v-1h-1V9h-1V7h2v1h1v1h1v1h1v1zM7 7v2H6v1H5v1H4v2h1v1h1v1h1v2H5v-1H4v-1H3v-1H2v-1H1v-2h1v-1h1V9h1V8h1V7z"/></svg>
                </button>
            </div>
          </div>
        </div>
      </control-action>
      {{-- Code Editor Start --}}
        <div id="cssModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Paste code your below: <br></h3><br>
          
          <span class="modal-close" id="closeModalBtn">&times;</span>
        </div>
      <textarea id="cssEditor">/* Drop your code css here */</textarea>
      <div class="policy">
        Touruworks does not store or share the YouTube chat code you submit.
          The access and refresh are stored locally within the application's settings file, located in the same directory as the application. This information is used solely to access YouTube Live chat dummy features and is never transmitted or shared with any external server.
        <br><br>
          *this feature save your code in local storage, so in case you open again the code will be there
      </div>
      <div class="modal-footer">
        <div>
          <button id="applyCssBtn" class="twPrButton">Apply & Save</button>
          <button id="resetCssBtn"  class="twPrButton">Reset</button>
        </div>
        <div>
          <button id="closeModalBtn2" class="twPrButton">Cancel</button>
        </div>
      </div>

    </div>
  </div>
      {{-- Code Editor Ends --}}
  <!-- Popup Chatbox -->
        <div id="chatPopup" class="popup">
          <div class="popup-content">
            <p><b>Update</b>: Added Leaderboard Community 21/5/2025 </p>
            
            <div class="checkbox-container">
              <label class="ap-y">
              <input type="checkbox" id="dontShowAgain">
                <p>dont show it again</p>
              </label>

              
            <div style="margin-top: 0px;">
              <button class="closePopup" id="btnClosePopup">Close</button>
            </div>
            </div>
          </div>
        </div>


    </body>
        <script> 
        // inisialisasi boy
         (i = 0), (a = 0);
        var c = 0;
      const container = document.getElementById("items");
        
      const playpauseButton = document.getElementById('playPause');
      const btnclear = document.getElementById('justReset'); 
      
      const container_reaction = document.getElementById("emoji-container");

        const playIcon = `
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24">
          <path fill="#eee" d="M21 11v-1h-1V9h-2V8h-2V7h-1V6h-2V5h-2V4h-1V3H8V2H6V1H3v1H2v20h1v1h3v-1h2v-1h2v-1h1v-1h2v-1h2v-1h1v-1h2v-1h2v-1h1v-1h1v-2zm-2 2h-2v1h-2v1h-1v1h-2v1h-2v1H9v1H7v1H5v1H4V3h1v1h2v1h2v1h1v1h2v1h2v1h1v1h2v1h2z"/>
        </svg>
        `;

        const pauseIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 22 22"><path fill="#eee" d="M6 4h3v14H6zm7 14V4h3v14z"/></svg>
        `;
      let isPlaying = false; 
      // Pasang event listener tombol
        playpauseButton.addEventListener('click', () => {
          togglePlayPause();
        });

        function togglePlayPause() {
          if (isPlaying) {
            if (a === 1) {
              a = 0;
              clearInterval(c);
            }
          } else {
            if (a === 0) {
              a = 1;
              c = setInterval(start, 800);
            }
          }

          isPlaying = !isPlaying;
          playpauseButton.innerHTML = isPlaying ? pauseIcon : playIcon;
        }

        function start() {
          i++;

          if (i >= 100) {
            container.innerHTML = "";
            container_reaction.innerHTML = "";
            i = 0;
            return;
          }

          if (i % 6 === 0) {
            renderFromArray(superchat);
          } else if (i % 7 === 0) {
            renderFromArray(member);
          } else if (i % 9 === 0) {
            // renderGift();
            renderFromArray(gift);
          } else if (i % 10 === 0) {
            // kosong
          } else if (i % 13 === 0) {
            renderFromArray(sticker);
          } else {
            renderFromArray(chats); 
          }
        }
        btnclear.onclick = () =>{
          i = 0;
          a = 0;
          container.innerHTML = ""; 
          if(c !== null){
            clearInterval(c);
          }
          isPlaying = false;
          playpauseButton.innerHTML = playIcon;
        }
          

        function setupButtonHandler(prefix, renderFunction) {
          document.querySelectorAll(`button[id^="${prefix}"]`).forEach(button => {
            button.onclick = () => {
              const index = button.dataset.index;
              if (index === undefined) {
                renderFunction(); // random/default
              } else {
                renderFunction(Number(index));
              }
            };
          });
        }
             
      setupButtonHandler("chat", (num) => renderFromArray(chats, num));
      setupButtonHandler("supa", (num) => renderFromArray(superchat, num));
      setupButtonHandler("sticker", (num) => renderFromArray(sticker, num));
      setupButtonHandler("member", (num) => renderFromArray(member, num));
      setupButtonHandler("gift", renderGift); 


      function renderFromArray(array, number, containerId = "items") {
        const container = document.getElementById(containerId);
        if (!container) return;  

        const randomItem = (typeof number === 'undefined')
          ? array[Math.floor(Math.random() * array.length)]
          : array[number];

        container.insertAdjacentHTML('beforeend', randomItem);
      }
   
    function renderGift() { 
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
    }
    function clearReaction(){
        container_reaction.innerHTML ="";
    }

 document.addEventListener('DOMContentLoaded', function () {

         const popup = document.getElementById("chatPopup");
    const closeBtn = document.getElementById("btnClosePopup");
    const checkbox = document.getElementById("dontShowAgain");

    // Cek apakah user pernah memilih untuk menyembunyikan popup
    const hidden = localStorage.getItem("updateversion:5/21/2025") === "true";

    if (!hidden) {
      popup.classList.add("show");

      // Auto-close setelah 10 detik (10000 ms)
      const autoCloseTimer = setTimeout(() => {
        popup.classList.remove("show");
      }, 60000);

      closeBtn.addEventListener("click", () => {
        if (checkbox.checked) {
          localStorage.setItem("updateversion:5/21/2025", "true");
        }
        popup.classList.remove("show");
        clearTimeout(autoCloseTimer); // Biar gak auto-close lagi setelah ditutup manual
      });
    }
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
          }, 200);
        }
      });
    });
  });

      </script>
      
  <!-- CodeMirror Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/codemirror@5.65.16/lib/codemirror.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/codemirror@5.65.16/mode/css/css.js"></script>

      <script>
    // Modal logic
    const modal = document.getElementById('cssModal');
    const openBtn = document.getElementById('openModalBtn');
    const closeBtn = document.getElementById('closeModalBtn');
    const closeBtn2 = document.getElementById('closeModalBtn2');

    openBtn.onclick = () => {
      modal.style.display = 'block';
      editor.refresh(); // Refresh CodeMirror size after modal appears
    };
    closeBtn.onclick = () => {
      modal.style.display = 'none';
    };
    closeBtn2.onclick = () => {
      modal.style.display = 'none';
    };
    // window.onclick = (e) => {
    //   if (e.target == modal) modal.style.display = 'none';
    // };

    // CodeMirror setup
      const editor = CodeMirror.fromTextArea(document.getElementById("cssEditor"), {
      mode: "css",
      lineNumbers: true,
      lineWrapping: true,
      theme: "darcula"
    });

    // Terapkan CSS
   // Fungsi untuk menerapkan CSS ke halaman
function applyCSS(cssCode) {
  let customStyle = document.getElementById('custom-style');
  if (!customStyle) {
    customStyle = document.createElement('style');
    customStyle.id = 'custom-style';
    document.head.appendChild(customStyle);
  }
  customStyle.textContent = cssCode;
}

// Saat tombol "Terapkan CSS" ditekan
document.getElementById('applyCssBtn').addEventListener('click', () => {
  const cssCode = editor.getValue();
  applyCSS(cssCode);
  localStorage.setItem('userCustomCSS', cssCode); // Simpan ke localStorage
});
document.getElementById('resetCssBtn').addEventListener('click', () => {
  editor.setValue('/* Drop your code css here */');
  applyCSS('');
  localStorage.removeItem('userCustomCSS');
});

// Saat halaman dimuat, cek apakah ada CSS tersimpan
window.addEventListener('DOMContentLoaded', () => {
  const savedCSS = localStorage.getItem('userCustomCSS');
  if (savedCSS) {
    editor.setValue(savedCSS);
    applyCSS(savedCSS);
  }
});
  </script>
</html>