<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Doto:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Basic Editor for youtube / Touru Works 2025 Dev.</title>
    <link rel="icon" href="{{asset('/src/svg/work_mouth_white.svg')}}" type="image/icon" >
    {{-- load yt css--}}
     <link rel="stylesheet" href="{{ asset('src/basic-editor/231.css') }}">
     <link rel="stylesheet" href="{{ asset('src/basic-editor/css.css') }}">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0; 
      overflow: auto;
    }
        yt-img-shadow > #img {
        object-fit: cover; /* atau 'contain', tergantung kebutuhan */
        width: 24px;
        height: 24px;
        border-radius: 50%;
        }
        #items #menu{
            display: none;
            position: relative;
        } 
    .container {
      display: flex;
      min-height: 100vh;
      overflow: visible !important;
    }

#items{
  width: max-content;
  display: flex;
  flex-direction: column
}
    /* .preview {
      flex: 5;  
      padding: 20px;
    } */
.preview {
  flex: 5;
  padding: 20px;
  min-width: 0; /* Biar flex item bisa mengecil sesuai kebutuhan */
}

/* Responsif untuk layar kecil */
@media (max-width: 768px) {

}
    /* Responsive */
    @media (max-width: 768px) {
      .container {
        flex-direction: row;
      }
      .menu {
        flex: 3;
      }
      .preview {
        flex: 3;
      }
    }
    
    @media (max-width: 468px) {
        .menu{
          display: none;
        }
    }
     .text-group-footer{
      display: flex;
      flex-direction: column;
      gap: 0px;
     }
  #timestamp{
    display: none !important;
  }
    #items {
      break-word: break-all; 
    }
       .hidden {
      display: none;
    }

button{
  background-color: var(--primary);
  color: white;
  border: none;
  /* padding: 6px 20px; */
  border-radius: 5px;
  cursor: pointer;
  opacity: 0.9;
  font-family: 'Poppins', sans-serif;
}
.success{
  background-color: #3a923d; /* Hijau */
}

.text-footer{
  color: var(--text);
  font-size: 14px;
  font-weight: 400;
  font-family: 'Poppins', sans-serif;
}
.text-footer a{
  font-weight:600; font-style: italic; color: var(--primary); cursor: pointer;
}
.cancel{
  /* background-color: #676767;  */
  color: var(--primary);
  background-color: transparent;
  border: 1px solid var(--primary);
  opacity: 0.6;
}
button:hover{
  opacity: 1;
  transition: all 0.3s ease;
}

.group-button{
  display: flex;
  flex-direction: row;
  gap: 4px;
  justify-content: flex-end;
}
.tooltip {
  position: relative;
  display: inline-block;
  cursor: pointer;
  /* color: #4a90e2; */
}
.tooltip-box {
  position: absolute;
  background-color: #333;
  color: #fff;
  padding: 8px 12px;
  border-radius: 6px;
  font-size: 14px;
  line-height: 1.4;
  white-space: normal;
  max-width: 350px;
  z-index: 10;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.2s ease;
}
yt-reaction-control-panel-overlay {
  position: absolute;
  right: 8px;
  bottom: 8px;
  border: 1px solid #fff;
  background-color: #ffffff92;
  border-radius: 50%;
  padding: 8px;
  display: flex;
  align-items: center;
  justify-content: center;

  /* Tambahan penting agar tetap bulat: */
  width: fit-content;
  height: fit-content;
  aspect-ratio: 1 / 1;
  box-sizing: content-box; /* supaya padding tidak memaksa height */
}
yt-reaction-control-panel-overlay img {
  width: 24px;
  height: 24px;
  object-fit: contain;
  display: block;
}
yt-reaction-control-panel-overlay-view-model,
yt-reaction-control-panel-view-model {
  display: block;
}
  .menu {
      flex: 2;
      background-color: var(--body);
      color: white;
      padding: 20px;
      transition: all 0.3s ease;
    }
  </style>
  
  @vite(['resources/js/app.js']) 
</head>
<body>

<div class="container">
  <div class="menu">
        <div class="menu-header">
          <div class="setting">
            <div>
            <h1>
              <a href="https://dev.touruworks.com"> 
                <svg class="icon-link" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="currentColor" d="M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42a.996.996 0 0 0-1.41 0l-6.59 6.59a.996.996 0 0 0 0 1.41l6.59 6.59a.996.996 0 1 0 1.41-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1"/></svg></a>
              css basic editor</h1>
            </div>
          </div>
          <hr>
          <div class="menu-list">
            <h6 class="title-menu">Select Mode 
              <span class="tooltip" data-tooltip="
              <b>Add CSS Snippet</b>: Enter only the code you want to add — it will be inserted at the end of your existing CSS.
              <br>
              <br>
              <b>Replace Your CSS</b>: Paste your full code — we’ll generate a new version.
              ">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12A10.26 10.26 0 0 0 12 1.75m-.11 16.8a1 1 0 1 1 0-2a1 1 0 0 1 0 2m3.82-7.32a3.73 3.73 0 0 1-2.21 2.05a1 1 0 0 0-.41.33a.9.9 0 0 0-.18.54v.71a1 1 0 1 1-2 0v-.74a2.9 2.9 0 0 1 .55-1.67a2.9 2.9 0 0 1 1.37-1a1.6 1.6 0 0 0 .63-.38A1.63 1.63 0 0 0 14 9.81a1.7 1.7 0 0 0-.16-.69a2 2 0 0 0-.62-.69a2 2 0 0 0-.89-.36a2.27 2.27 0 0 0-1.44.2a2.2 2.2 0 0 0-1 1a1 1 0 0 1-1.82-.83a4.17 4.17 0 0 1 4.56-2.37a4 4 0 0 1 1.72.7A4.1 4.1 0 0 1 15.6 8.2a3.7 3.7 0 0 1 .08 3.05z"/></svg>
              </span>
              </h6>
            <select id="codeOption" style="font-family: 'Poppins'">
              <option value="add">+ Add CSS Snippet</option>
              <option value="replace">+ Replace your code</option>
            </select>
            <div id="textareaWrapper" class="hidden"> 
              <textarea class="codeInput" id="myCssInput" placeholder="Paste your code here..."></textarea>
              <div class="group-button">
                <button id="applyCssBtn" class="success">Apply & Save</button>
                <button id="resetCssBtn"  class="cancel">Reset</button>
              </div>
            </div>
          </div>
          <div class="menu-list">
            <h6 class="title-menu">Remove Reaction
              <span class="tooltip" data-tooltip="Hide message reactions from the chat.">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12A10.26 10.26 0 0 0 12 1.75m-.11 16.8a1 1 0 1 1 0-2a1 1 0 0 1 0 2m3.82-7.32a3.73 3.73 0 0 1-2.21 2.05a1 1 0 0 0-.41.33a.9.9 0 0 0-.18.54v.71a1 1 0 1 1-2 0v-.74a2.9 2.9 0 0 1 .55-1.67a2.9 2.9 0 0 1 1.37-1a1.6 1.6 0 0 0 .63-.38A1.63 1.63 0 0 0 14 9.81a1.7 1.7 0 0 0-.16-.69a2 2 0 0 0-.62-.69a2 2 0 0 0-.89-.36a2.27 2.27 0 0 0-1.44.2a2.2 2.2 0 0 0-1 1a1 1 0 0 1-1.82-.83a4.17 4.17 0 0 1 4.56-2.37a4 4 0 0 1 1.72.7A4.1 4.1 0 0 1 15.6 8.2a3.7 3.7 0 0 1 .08 3.05z"/></svg>
              </span>

            </h6>
            <div class="group-setting">
              <label class="custom-radio">
                <input type="radio" name="chat-reaction"  checked />
                <span class="radio-mark"></span> no </label>
              <label class="custom-radio">
                <input type="radio" name="chat-reaction" id="chat-reaction"/>
                <span class="radio-mark"></span> yes </label>
            </div>
          </div>
          <div class="menu-list">
            <h6 class="title-menu">Flex / Wider Chat <span class="tooltip" data-tooltip="
              The chat width takes up the whole OBS browser settings">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12A10.26 10.26 0 0 0 12 1.75m-.11 16.8a1 1 0 1 1 0-2a1 1 0 0 1 0 2m3.82-7.32a3.73 3.73 0 0 1-2.21 2.05a1 1 0 0 0-.41.33a.9.9 0 0 0-.18.54v.71a1 1 0 1 1-2 0v-.74a2.9 2.9 0 0 1 .55-1.67a2.9 2.9 0 0 1 1.37-1a1.6 1.6 0 0 0 .63-.38A1.63 1.63 0 0 0 14 9.81a1.7 1.7 0 0 0-.16-.69a2 2 0 0 0-.62-.69a2 2 0 0 0-.89-.36a2.27 2.27 0 0 0-1.44.2a2.2 2.2 0 0 0-1 1a1 1 0 0 1-1.82-.83a4.17 4.17 0 0 1 4.56-2.37a4 4 0 0 1 1.72.7A4.1 4.1 0 0 1 15.6 8.2a3.7 3.7 0 0 1 .08 3.05z"/></svg>
              </span></h6>
            <div class="group-setting">
              <label class="custom-radio">
                <input type="radio" name="chat-wide" id="chat-flex" checked />
                <span class="radio-mark" id="wider"></span> flexible </label>
              <label class="custom-radio">
                <input type="radio" name="chat-wide" id="chat-wider" />
                <span class="radio-mark"></span> wider </label>
            </div>
          </div>
            <div class="menu-list">
            <h6 class="title-menu">Remove Buttons Chat
              <span class="tooltip" data-tooltip="Hide badges for Super Chat comments and community ranks in the chat.">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12A10.26 10.26 0 0 0 12 1.75m-.11 16.8a1 1 0 1 1 0-2a1 1 0 0 1 0 2m3.82-7.32a3.73 3.73 0 0 1-2.21 2.05a1 1 0 0 0-.41.33a.9.9 0 0 0-.18.54v.71a1 1 0 1 1-2 0v-.74a2.9 2.9 0 0 1 .55-1.67a2.9 2.9 0 0 1 1.37-1a1.6 1.6 0 0 0 .63-.38A1.63 1.63 0 0 0 14 9.81a1.7 1.7 0 0 0-.16-.69a2 2 0 0 0-.62-.69a2 2 0 0 0-.89-.36a2.27 2.27 0 0 0-1.44.2a2.2 2.2 0 0 0-1 1a1 1 0 0 1-1.82-.83a4.17 4.17 0 0 1 4.56-2.37a4 4 0 0 1 1.72.7A4.1 4.1 0 0 1 15.6 8.2a3.7 3.7 0 0 1 .08 3.05z"/></svg>
              </span>
            </h6>
            <div class="group-setting">
              <label class="custom-radio">
                <input type="radio" name="chat-buttons" checked />
                <span class="radio-mark" id="no-buttons"></span>no </label>
              <label class="custom-radio">
                <input type="radio" name="chat-buttons" id="chat-buttons" />
                <span class="radio-mark"></span>yes</label>
            </div>
          </div>
          <div class="menu-list">
            <h6 class="title-menu">Shade Effect <span class="tooltip" data-tooltip="The top of your chat fades out with an effect.">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="currentColor" d="M12 1.75A10.25 10.25 0 1 0 22.25 12A10.26 10.26 0 0 0 12 1.75m-.11 16.8a1 1 0 1 1 0-2a1 1 0 0 1 0 2m3.82-7.32a3.73 3.73 0 0 1-2.21 2.05a1 1 0 0 0-.41.33a.9.9 0 0 0-.18.54v.71a1 1 0 1 1-2 0v-.74a2.9 2.9 0 0 1 .55-1.67a2.9 2.9 0 0 1 1.37-1a1.6 1.6 0 0 0 .63-.38A1.63 1.63 0 0 0 14 9.81a1.7 1.7 0 0 0-.16-.69a2 2 0 0 0-.62-.69a2 2 0 0 0-.89-.36a2.27 2.27 0 0 0-1.44.2a2.2 2.2 0 0 0-1 1a1 1 0 0 1-1.82-.83a4.17 4.17 0 0 1 4.56-2.37a4 4 0 0 1 1.72.7A4.1 4.1 0 0 1 15.6 8.2a3.7 3.7 0 0 1 .08 3.05z"/></svg>
              </span></h6>
            <div class="group-setting">
              <label class="custom-radio">
                <input type="radio" name="chat-shading" id="shading-on" />
                <span class="radio-mark"></span> fade effect </label>
              <label class="custom-radio">
                <input type="radio" name="chat-shading" checked />
                <span class="radio-mark"></span> no effect </label>
            </div>
          </div>
        </div>
        <div class="menu-footer">
          <button class="generate-button" type="" onclick="generateCSS()">Generate & Copy</button>
          <div class="code-area">
            <button class="copy-button" onclick="generateCSS()">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24">
                <path fill="currentColor" d="M15 3V2h-1V1h-4v1H9v1H8v3h1v1h6V6h1V3zm-4 3V5h-1V3h1V2h2v1h1v2h-1v1z" />
                <path fill="currentColor" d="M20 5v17h-1v1H5v-1H4V5h1V4h2v3h1v1h8V7h1V4h2v1z" />
              </svg>
            </button>
            <textarea id="css-output" rows="5" class="code-input" readonly></textarea>
          </div>
          <div class="text-group-footer">
             <p class="text-footer"><a href="https://x.com/touru9klub">© 2025 Touru</a>— Basic Editor for YouTube!</p>
             <p class="text-footer">
              Feedback and ideas are welcome</p>
          </div>
        </div>
      </div>

    <div class="preview">
     <div id="items">
          <!-- General Chatter -->
          <yt-live-chat-text-message-renderer class="style-scope yt-live-chat-item-list-renderer" whole-message-clickable="" author-type="">
            <yt-img-shadow id="author-photo" class="no-transition style-scope yt-live-chat-text-message-renderer" height="24" width="24" style="background-color: transparent;" loaded="">
              <img id="img" draggable="false" class="style-scope yt-img-shadow" alt="" src="https://lh3.googleusercontent.com/d/1EWgTyphgg2lcji6GPv-LRHAARzDWItNT" width="24" height="24">
            </yt-img-shadow>
            <div id="content" class="style-scope yt-live-chat-text-message-renderer">
              <span id="timestamp" class="style-scope yt-live-chat-text-message-renderer">2:30 PM</span>
              <yt-live-chat-author-chip class="style-scope yt-live-chat-text-message-renderer">
                <span id="prepend-chat-badges" class="style-scope yt-live-chat-author-chip"></span>
                <span id="author-name" dir="auto" class="style-scope yt-live-chat-author-chip">General Chat <span id="chip-badges" class="style-scope yt-live-chat-author-chip"></span>
                </span>
                <span id="chat-badges" class="style-scope yt-live-chat-author-chip"></span>
              </yt-live-chat-author-chip>&ZeroWidthSpace; <span id="message" dir="auto" class="style-scope yt-live-chat-text-message-renderer">The CSS preview here might look a bit weird, better try it out directly on YouTube.</span>
              <span id="deleted-state" class="style-scope yt-live-chat-text-message-renderer"></span>
              <a id="show-original" href="#" class="style-scope yt-live-chat-text-message-renderer"></a>
            </div>
            <div id="menu" class="style-scope yt-live-chat-text-message-renderer">
              <yt-icon-button id="menu-button" class="style-scope yt-live-chat-text-message-renderer">
                <button id="button" class="style-scope yt-icon-button" aria-label="Tindakan chat">
                  <yt-icon icon="more_vert" class="style-scope yt-live-chat-text-message-renderer">
                    <yt-icon-shape class="style-scope yt-icon">
                      <icon-shape class="yt-spec-icon-shape">
                        <div style="width: 100%; height: 100%; fill: currentcolor;">
                          <svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                            <path d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z"></path>
                          </svg>
                        </div>
                      </icon-shape>
                    </yt-icon-shape>
                  </yt-icon>
                </button>
                <yt-interaction id="interaction" class="circular style-scope yt-icon-button">
                  <div class="stroke style-scope yt-interaction"></div>
                  <div class="fill style-scope yt-interaction"></div>
                </yt-interaction>
              </yt-icon-button>
            </div>
            <div id="inline-action-button-container" class="style-scope yt-live-chat-text-message-renderer" aria-hidden="true">
              <div id="inline-action-buttons" class="style-scope yt-live-chat-text-message-renderer"></div>
            </div>
          </yt-live-chat-text-message-renderer>
          <!-- End General Chatter -->
          {{-- Membership Joining --}}
          <yt-live-chat-membership-item-renderer class="style-scope yt-live-chat-item-list-renderer" modern="" id="Ci8KLUNJdl91dnlKMkljREZlX3RLQVVkdG9rV2N3LUxveU1lc0lELTM0NDg4Njk0OA%3D%3D" whole-message-clickable="{&quot;clickTrackingParams&quot;:&quot;CCQQ4f0GIhMIrtrZk9eLiAMVcfqgAh3dLSEs&quot;,&quot;commandMetadata&quot;:{&quot;webCommandMetadata&quot;:{&quot;ignoreNavigation&quot;:true}},&quot;liveChatItemContextMenuEndpoint&quot;:{&quot;params&quot;:&quot;Q2pFS0x3b3RRMGwyWDNWMmVVb3lTV05FUm1WZmRFdEJWV1IwYjJ0WFkzY3RURzk1VFdWelNVUXRNelEwT0RnMk9UUTRHaWtxSndvWVZVTnVUMGxzYzJsd2RWUm5UVjlrT1ZCMGFIZFVTMjEzRWd0eWJHRlVkakZzYzNOT1VTQUNLQVF5R2dvWVZVTllMVlpuTFcwNU1GWnZOR055UlZKb2RrRTVjbkpST0FKSUFGQVg=&quot;}}" has-primary-header-text="">

  <div id="card" class="style-scope yt-live-chat-membership-item-renderer">
    <div id="header" class="style-scope yt-live-chat-membership-item-renderer">
      <yt-img-shadow id="author-photo" height="40" width="40" class="style-scope yt-live-chat-membership-item-renderer no-transition" style="background-color: transparent;" loaded="">
        <!--css-build:shady-->
        <!--css-build:shady-->
        <img id="img" draggable="false" class="style-scope yt-img-shadow" alt="" height="40" width="40" src="https://lh3.googleusercontent.com/d/18LGMQAQcsWfuhzAblziR71arh7MtDuXF">
      </yt-img-shadow>
      <dom-if restamp="" class="style-scope yt-live-chat-membership-item-renderer">
        <template is="dom-if"></template>
      </dom-if>
      <dom-if class="style-scope yt-live-chat-membership-item-renderer">
        <template is="dom-if"></template>
      </dom-if>
      <div id="header-content" class="style-scope yt-live-chat-membership-item-renderer">
        <div id="header-content-primary-column" class="style-scope yt-live-chat-membership-item-renderer">
          <div id="header-content-inner-column" class="style-scope yt-live-chat-membership-item-renderer">
            <yt-live-chat-author-chip class="style-scope yt-live-chat-membership-item-renderer">
              <!--css-build:shady-->
              <!--css-build:shady-->
              <span id="prepend-chat-badges" class="style-scope yt-live-chat-author-chip"></span>
              <span id="author-name" dir="auto" class="member style-scope yt-live-chat-author-chip style-scope yt-live-chat-author-chip">Membership Join <span id="chip-badges" class="style-scope yt-live-chat-author-chip"></span>
              </span>
              <span id="chat-badges" class="style-scope yt-live-chat-author-chip">
                <yt-live-chat-author-badge-renderer class="style-scope yt-live-chat-author-chip" aria-label="Member (2 months)" type="member" shared-tooltip-text="Member (2 months)">
                  <!--css-build:shady-->
                  <!--css-build:shady-->
                  <div id="image" class="style-scope yt-live-chat-author-badge-renderer">
                    <img src="https://lh3.googleusercontent.com/TIJR56viqKAlho0WwVZm0sS70v3LFX9lWA0-ZTXJb530KVqipjr-1V7iEivVreLARiw6gqO9VgAQ7Poz" class="style-scope yt-live-chat-author-badge-renderer" alt="Member (2 months)">
                  </div>
                </yt-live-chat-author-badge-renderer>
              </span>
            </yt-live-chat-author-chip>
            <dom-if restamp="" class="style-scope yt-live-chat-membership-item-renderer">
              <template is="dom-if"></template>
            </dom-if>
            <div id="header-primary-text" class="style-scope yt-live-chat-membership-item-renderer">Member for 4 months</div>
          </div>
          <div id="header-subtext" class="style-scope yt-live-chat-membership-item-renderer">Membership Tier</div>
        </div>
        <div id="timestamp" class="style-scope yt-live-chat-membership-item-renderer">12:39 AM</div>
      </div>
      <div id="menu" class="style-scope yt-live-chat-membership-item-renderer">
        <yt-icon-button id="menu-button" class="style-scope yt-live-chat-membership-item-renderer" role="button">
          <!--css-build:shady-->
          <!--css-build:shady-->
          <button id="button" class="style-scope yt-icon-button" aria-label="Chat actions">
            <yt-icon icon="more_vert" class="style-scope yt-live-chat-membership-item-renderer">
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
    </div>
    <div id="content" class="style-scope yt-live-chat-membership-item-renderer">
      <div id="message" dir="auto" class="style-scope yt-live-chat-membership-item-renderer">im just joining membership to your channel this is message looks like <img class="emoji yt-formatted-string style-scope yt-live-chat-membership-item-renderer" src="https://yt3.ggpht.com/cktIaPxFwnrPwn-alHvnvedHLUJwbHi8HCK3AgbHpphrMAW99qw0bDfxuZagSY5ieE9BBrA=w48-h48-c-k-nd" alt="Nangis" data-emoji-id="UCnOIlsipuTgM_d9PthwTKmw/H_XMZJOXBMzUgwP0zaHIBw" shared-tooltip-text=":_Nangis:" id="emoji-1">
      </div>
      <div id="input-container" class="style-scope yt-live-chat-membership-item-renderer">
        <dom-if class="style-scope yt-live-chat-membership-item-renderer">
          <template is="dom-if"></template>
        </dom-if>
      </div>
      <yt-formatted-string id="deleted-state" class="style-scope yt-live-chat-membership-item-renderer" is-empty="function(){var e=Oa.apply(0,arguments);a.loggingStatus.currentExternalCall=b;a.loggingStatus.bypassProxyController=!0;var g,k=((g=a.is)!=null?g:a.tagName).toLowerCase();ov(k,b,&quot;PROPERTY_ACCESS_CALL_EXTERNAL&quot;);var m;g=(m=c!=null?c:d[b])==null?void 0:m.call.apply(m,[d].concat(na(e)));a.loggingStatus.currentExternalCall=void 0;a.loggingStatus.bypassProxyController=!1;return g}">
        <!--css-build:shady-->
        <!--css-build:shady-->
        <yt-attributed-string class="style-scope yt-formatted-string"></yt-attributed-string>
      </yt-formatted-string>
    </div>
  </div>
  <div id="footer-button" class="style-scope yt-live-chat-membership-item-renderer" hidden=""></div>
  <div id="inline-action-button-container" class="style-scope yt-live-chat-membership-item-renderer" aria-hidden="true">
    <div id="inline-action-buttons" class="style-scope yt-live-chat-membership-item-renderer"></div>
  </div>
</yt-live-chat-membership-item-renderer>
          <!-- Membership Chatter -->
          <yt-live-chat-text-message-renderer class="style-scope yt-live-chat-item-list-renderer" whole-message-clickable="" author-type="member">
            <yt-img-shadow id="author-photo" class="no-transition style-scope yt-live-chat-text-message-renderer" height="24" width="24" style="background-color: transparent;" loaded="">
              <img id="img" draggable="false" class="style-scope yt-img-shadow" alt="" src="https://lh3.googleusercontent.com/d/1Z4QlJZFBpdRXe8w4a3wPLsSgcot9gnIo" width="24" height="24">
            </yt-img-shadow>
            <div id="content" class="style-scope yt-live-chat-text-message-renderer">
              <span id="timestamp" class="style-scope yt-live-chat-text-message-renderer">2:23 PM</span>
              <yt-live-chat-author-chip class="style-scope yt-live-chat-text-message-renderer">
                <span id="prepend-chat-badges" class="style-scope yt-live-chat-author-chip"></span>
                <span id="author-name" dir="auto" class="member style-scope yt-live-chat-author-chip">Membership Chat <span id="chip-badges" class="style-scope yt-live-chat-author-chip"></span>
                </span>
                <span id="chat-badges" class="style-scope yt-live-chat-author-chip">
                  <yt-live-chat-author-badge-renderer class="style-scope yt-live-chat-author-chip" aria-label="Pelanggan (6 bulan)" type="member" shared-tooltip-text="Pelanggan (6 bulan)">
                    <div id="image" class="style-scope yt-live-chat-author-badge-renderer">
                      <img src="https://lh3.googleusercontent.com/gAq7jDekvG5e_Az-VnKhS-Sy-rZDgyHIdGQAhks2iWlN7rMkiTlxnW5ztMW96ynyEIG1hMe67LLLCP6q" class="style-scope yt-live-chat-author-badge-renderer" alt="Member (1 year)">
                    </div>
                  </yt-live-chat-author-badge-renderer>
                </span>
              </yt-live-chat-author-chip>&ZeroWidthSpace; <span id="message" dir="auto" class="style-scope yt-live-chat-text-message-renderer">If you have any question, please let me know im always here discord @tourubaskara twitter/x @touru9klub</span>
              <span id="deleted-state" class="style-scope yt-live-chat-text-message-renderer"></span>
              <a id="show-original" href="#" class="style-scope yt-live-chat-text-message-renderer"></a>
            </div>
            <div id="menu" class="style-scope yt-live-chat-text-message-renderer">
              <yt-icon-button id="menu-button" class="style-scope yt-live-chat-text-message-renderer">
                <button id="button" class="style-scope yt-icon-button" aria-label="Tindakan chat">
                  <yt-icon icon="more_vert" class="style-scope yt-live-chat-text-message-renderer">
                    <yt-icon-shape class="style-scope yt-icon">
                      <icon-shape class="yt-spec-icon-shape">
                        <div style="width: 100%; height: 100%; fill: currentcolor;">
                          <svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                            <path d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z"></path>
                          </svg>
                        </div>
                      </icon-shape>
                    </yt-icon-shape>
                  </yt-icon>
                </button>
                <yt-interaction id="interaction" class="circular style-scope yt-icon-button">
                  <div class="stroke style-scope yt-interaction"></div>
                  <div class="fill style-scope yt-interaction"></div>
                </yt-interaction>
              </yt-icon-button>
            </div>
            <div id="inline-action-button-container" class="style-scope yt-live-chat-text-message-renderer" aria-hidden="true">
              <div id="inline-action-buttons" class="style-scope yt-live-chat-text-message-renderer"></div>
            </div>
          </yt-live-chat-text-message-renderer>
          <!-- End Membership Chatter -->
          {{-- Ranker Chatter --}}
          <yt-live-chat-text-message-renderer class="style-scope yt-live-chat-item-list-renderer" modern="" id="ChwKGkNNaVFocWZOc1kwREZkd2hyUVlkWno4Q3lB" whole-message-clickable="{&quot;commandMetadata&quot;:{&quot;webCommandMetadata&quot;:{&quot;ignoreNavigation&quot;:true}},&quot;liveChatItemContextMenuEndpoint&quot;:{&quot;params&quot;:&quot;Q2g0S0hBb2FRMDFwVVdoeFprNXpXVEJFUm1SM2FISlJXV1JhZWpoRGVVRWFLU29uQ2hoVlEwMUhOMWxQVjJKMVVGOU1ZM2d6T1haU1VtaEVibEVTQ3paak5uSXlXWGxFYkhwQklBSW9CRElhQ2hoVlEyVklSRlpFVFhkbFZUUlVOMmxuY1MxM2JqaG5jbmM0QWtnQVVBRSUzRA==&quot;}}" author-type=""> 
  <yt-img-shadow id="author-photo" class="no-transition style-scope yt-live-chat-text-message-renderer" height="24" width="24" loaded="" style="background-color: transparent;">
 
    <img id="img" draggable="false" class="style-scope yt-img-shadow" alt="" height="24" width="24" src="https://lh3.googleusercontent.com/d/1-uQQf_TocIMCG6RH80eMpHdlHBNZRs4o">
  </yt-img-shadow>
  <div id="content" class="style-scope yt-live-chat-text-message-renderer">
    <span id="timestamp" class="style-scope yt-live-chat-text-message-renderer">3:14 PM</span>
    <yt-live-chat-author-chip class="style-scope yt-live-chat-text-message-renderer">
      <!--css-build:shady-->
      <!--css-build:shady-->
      <span id="prepend-chat-badges" class="style-scope yt-live-chat-author-chip"></span>
      <span id="author-name" dir="auto" class=" style-scope yt-live-chat-author-chip style-scope yt-live-chat-author-chip">Rank Chatter<span id="chip-badges" class="style-scope yt-live-chat-author-chip"></span>
      </span>
      <span id="chat-badges" class="style-scope yt-live-chat-author-chip"></span>
    </yt-live-chat-author-chip>&ZeroWidthSpace; <div id="before-content-buttons" class="style-scope yt-live-chat-text-message-renderer">
      <yt-button-view-model class="yt-live-chat-text-message-renderer">
        <button-view-model class="yt-spec-button-view-model style-scope yt-live-chat-text-message-renderer">
          <button class="yt-spec-button-shape-next yt-spec-button-shape-next--filled yt-spec-button-shape-next--mono yt-spec-button-shape-next--size-xs yt-spec-button-shape-next--icon-leading yt-spec-button-shape-next--enable-backdrop-filter-experiment" title="" aria-label="#3" aria-disabled="false" style="color: rgb(255, 255, 255); background-color: rgb(54, 0, 140);">
            <div aria-hidden="true" class="yt-spec-button-shape-next__icon">
              <yt-icon style="width: 16px; height: 16px;">
                <!--css-build:shady-->
                <!--css-build:shady-->
                <span class="yt-icon-shape style-scope yt-icon yt-spec-icon-shape">
                  <div style="width: 100%; height: 100%; display: block; fill: currentcolor;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="16" viewBox="0 0 16 16" width="16" focusable="false" aria-hidden="true" style="pointer-events: none; display: inherit; width: 100%; height: 100%;">
                      <path clip-rule="evenodd" d="M4.5 6 8 2l3.5 4L15 3.5V14H1V3.5L4.5 6ZM2 12v1h12v-1H2Zm12-1H2V5.443L4.656 7.34 8 3.52l3.344 3.821L14 5.443V11Z" fill-rule="evenodd"></path>
                    </svg>
                  </div>
                </span>
              </yt-icon>
            </div>
            <div class="yt-spec-button-shape-next__button-text-content">#3</div>
            <yt-touch-feedback-shape style="border-radius: inherit;">
              <div aria-hidden="true" class="yt-spec-touch-feedback-shape yt-spec-touch-feedback-shape--touch-response-inverse">
                <div class="yt-spec-touch-feedback-shape__stroke"></div>
                <div class="yt-spec-touch-feedback-shape__fill"></div>
              </div>
            </yt-touch-feedback-shape>
          </button>
        </button-view-model>
      </yt-button-view-model>
    </div>&ZeroWidthSpace; <span id="message" dir="auto" class="style-scope yt-live-chat-text-message-renderer">Broo! im ranked 3 on this community i think now im cooler than anyone else 🔥</span>
    <span id="deleted-state" class="style-scope yt-live-chat-text-message-renderer"></span>
    <a id="show-original" href="#" class="style-scope yt-live-chat-text-message-renderer"></a>
  </div>
  <div id="menu" class="style-scope yt-live-chat-text-message-renderer">
    <yt-icon-button id="menu-button" class="style-scope yt-live-chat-text-message-renderer">
      <!--css-build:shady-->
      <!--css-build:shady-->
      <button id="button" class="style-scope yt-icon-button" aria-label="Chat actions">
        <yt-icon icon="more_vert" class="style-scope yt-live-chat-text-message-renderer">
          <!--css-build:shady-->
          <!--css-build:shady-->
          <span class="yt-icon-shape style-scope yt-icon yt-spec-icon-shape">
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
  <div id="inline-action-button-container" class="style-scope yt-live-chat-text-message-renderer" aria-hidden="true">
    <div id="inline-action-buttons" class="style-scope yt-live-chat-text-message-renderer"></div>
  </div>
</yt-live-chat-text-message-renderer>
          {{-- Ranker Chatter Ends --}}
          <!-- Moderator Chatter -->
          <yt-live-chat-text-message-renderer class="style-scope yt-live-chat-item-list-renderer" modern="" author-type="moderator">
            <!--css-build:shady-->
            <!--css-build:shady-->
            <yt-img-shadow id="author-photo" class="no-transition style-scope yt-live-chat-text-message-renderer" height="24" width="24" style="background-color: transparent;" loaded="">
              <!--css-build:shady-->
              <!--css-build:shady-->
              <img id="img" draggable="false" class="style-scope yt-img-shadow" alt="" height="24" width="24" src="https://lh3.googleusercontent.com/d/1u0gJhDNl1RQiimtQtaiCwK1CVJrkr-w5">
            </yt-img-shadow>
            <div id="content" class="style-scope yt-live-chat-text-message-renderer">
              <span id="timestamp" class="style-scope yt-live-chat-text-message-renderer">12:41 AM</span>
              <yt-live-chat-author-chip class="style-scope yt-live-chat-text-message-renderer">
                <!--css-build:shady-->
                <!--css-build:shady-->
                <span id="prepend-chat-badges" class="style-scope yt-live-chat-author-chip"></span>
                <span id="author-name" dir="auto" class="moderator style-scope yt-live-chat-author-chip style-scope yt-live-chat-author-chip">Moderator Chat <span id="chip-badges" class="style-scope yt-live-chat-author-chip"></span>
                </span>
                <span id="chat-badges" class="style-scope yt-live-chat-author-chip">
                  <yt-live-chat-author-badge-renderer class="style-scope yt-live-chat-author-chip" aria-label="Moderator" type="moderator" shared-tooltip-text="Moderator">
                    <!--css-build:shady-->
                    <!--css-build:shady-->
                    <div id="image" class="style-scope yt-live-chat-author-badge-renderer">
                      <yt-icon class="style-scope yt-live-chat-author-badge-renderer">
                        <!--css-build:shady-->
                        <!--css-build:shady-->
                        <span class="yt-icon-shape yt-spec-icon-shape">
                          <div style="width: 100%; height: 100%; display: block; fill: currentcolor;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" focusable="false" aria-hidden="true" style="pointer-events: none; display: inherit; width: 100%; height: 100%;">
                              <path d="M9.64589146,7.05569719 C9.83346524,6.562372 9.93617022,6.02722257 9.93617022,5.46808511 C9.93617022,3.00042984 7.93574038,1 5.46808511,1 C4.90894765,1 4.37379823,1.10270499 3.88047304,1.29027875 L6.95744681,4.36725249 L4.36725255,6.95744681 L1.29027875,3.88047305 C1.10270498,4.37379824 1,4.90894766 1,5.46808511 C1,7.93574038 3.00042984,9.93617022 5.46808511,9.93617022 C6.02722256,9.93617022 6.56237198,9.83346524 7.05569716,9.64589147 L12.4098057,15 L15,12.4098057 L9.64589146,7.05569719 Z"></path>
                            </svg>
                          </div>
                        </span>
                      </yt-icon>
                    </div>
                  </yt-live-chat-author-badge-renderer>
                  <yt-live-chat-author-badge-renderer class="style-scope yt-live-chat-author-chip" aria-label="Member (2 years)" type="member" shared-tooltip-text="Member (2 years)">
                    <!--css-build:shady-->
                    <!--css-build:shady-->
                    <div id="image" class="style-scope yt-live-chat-author-badge-renderer">
                      <img src="https://lh3.googleusercontent.com/TIJR56viqKAlho0WwVZm0sS70v3LFX9lWA0-ZTXJb530KVqipjr-1V7iEivVreLARiw6gqO9VgAQ7Poz" class="style-scope yt-live-chat-author-badge-renderer" alt="Member (2 years)">
                    </div>
                  </yt-live-chat-author-badge-renderer>
                </span>
              </yt-live-chat-author-chip>&ZeroWidthSpace; <div id="before-content-buttons" class="style-scope yt-live-chat-text-message-renderer"></div>&ZeroWidthSpace; <span id="message" dir="auto" class="style-scope yt-live-chat-text-message-renderer">Thankyou for order comission we always try my best to improve our work in future.</span>
              <span id="deleted-state" class="style-scope yt-live-chat-text-message-renderer"></span>
              <a id="show-original" href="#" class="style-scope yt-live-chat-text-message-renderer"></a>
            </div>
            <div id="menu" class="style-scope yt-live-chat-text-message-renderer">
              <yt-icon-button id="menu-button" class="style-scope yt-live-chat-text-message-renderer" role="button">
                <!--css-build:shady-->
                <!--css-build:shady-->
                <button id="button" class="style-scope yt-icon-button" aria-label="Chat actions">
                  <yt-icon icon="more_vert" class="style-scope yt-live-chat-text-message-renderer">
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
            <div id="inline-action-button-container" class="style-scope yt-live-chat-text-message-renderer" aria-hidden="true">
              <div id="inline-action-buttons" class="style-scope yt-live-chat-text-message-renderer"></div>
            </div>
          </yt-live-chat-text-message-renderer>
          <!-- Moderator Chatter End -->
          {{-- Super Chatter Example --}}
          <yt-live-chat-paid-message-renderer class="style-scope yt-live-chat-item-list-renderer" modern="" show-only-header="" allow-animations="" style="--yt-live-chat-paid-message-primary-color: rgba(30,136,229,1); --yt-live-chat-paid-message-secondary-color: rgba(21,101,192,1); --yt-live-chat-paid-message-header-color: rgba(255,255,255,1); --yt-live-chat-paid-message-timestamp-color: rgba(255,255,255,0.5019607843137255); --yt-live-chat-paid-message-color: rgba(255,255,255,1); --yt-live-chat-disable-highlight-message-author-name-color: rgba(255,255,255,0.7019607843137254); --yt-live-chat-text-input-background-color: rgba(0,0,0,0.18823529411764706);"><!--css-build:shady--><!--css-build:shady--><div id="card" class="style-scope yt-live-chat-paid-message-renderer"> <div id="header" class="style-scope yt-live-chat-paid-message-renderer"> <yt-img-shadow id="author-photo" class="style-scope yt-live-chat-paid-message-renderer no-transition" style="background-color: transparent;" loaded=""><!--css-build:shady--><!--css-build:shady--><img id="img" draggable="false" class="style-scope yt-img-shadow" alt="" width="32" height="32" src="https://lh3.googleusercontent.com/d/1u0gJhDNl1RQiimtQtaiCwK1CVJrkr-w5"></yt-img-shadow> <dom-if restamp="" class="style-scope yt-live-chat-paid-message-renderer"><template is="dom-if"></template></dom-if> <dom-if class="style-scope yt-live-chat-paid-message-renderer"><template is="dom-if"></template></dom-if>  <dom-if restamp="" class="style-scope yt-live-chat-paid-message-renderer"><template is="dom-if"></template></dom-if> <div id="header-content" class="style-scope yt-live-chat-paid-message-renderer"> <div id="header-content-primary-column" class="style-scope yt-live-chat-paid-message-renderer"> <div id="single-line" class="style-scope yt-live-chat-paid-message-renderer"> <div id="author-name-chip" class="style-scope yt-live-chat-paid-message-renderer"> <yt-live-chat-author-chip disable-highlighting="" single-line="" class="style-scope yt-live-chat-paid-message-renderer"><!--css-build:shady--><!--css-build:shady--><span id="prepend-chat-badges" class="style-scope yt-live-chat-author-chip"></span><span id="author-name" dir="auto" class="single-line style-scope yt-live-chat-author-chip style-scope yt-live-chat-author-chip">Donation Blue<span id="chip-badges" class="style-scope yt-live-chat-author-chip"></span></span><span id="chat-badges" class="style-scope yt-live-chat-author-chip"></span></yt-live-chat-author-chip> </div> <div id="purchase-amount-column" class="style-scope yt-live-chat-paid-message-renderer"> <yt-img-shadow id="currency-img" height="16" width="16" class="style-scope yt-live-chat-paid-message-renderer no-transition" hidden=""><!--css-build:shady--><!--css-build:shady--><img id="img" draggable="false" class="style-scope yt-img-shadow" alt="" height="16" width="16"></yt-img-shadow> <div id="purchase-amount" class="style-scope yt-live-chat-paid-message-renderer"> <yt-formatted-string class="style-scope yt-live-chat-paid-message-renderer">Rp10,000</yt-formatted-string> </div> </div> </div> </div> <span id="timestamp" class="style-scope yt-live-chat-paid-message-renderer">12:NaN AM</span> <div id="gradient-container" class="style-scope yt-live-chat-paid-message-renderer"> <div id="gradient" class="style-scope yt-live-chat-paid-message-renderer"></div> </div> <div id="menu" class="style-scope yt-live-chat-paid-message-renderer" hidden=""> <yt-icon-button id="menu-button" class="style-scope yt-live-chat-paid-message-renderer"><!--css-build:shady--><!--css-build:shady--><button id="button" class="style-scope yt-icon-button"> <yt-icon icon="more_vert" class="style-scope yt-live-chat-paid-message-renderer"><!--css-build:shady--><!--css-build:shady--><yt-icon-shape class="style-scope yt-icon"><icon-shape class="yt-spec-icon-shape"><div style="width: 100%; height: 100%; fill: currentcolor;"><svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;"><path d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z"></path></svg></div></icon-shape></yt-icon-shape></yt-icon> </button><yt-interaction id="interaction" class="circular style-scope yt-icon-button"><!--css-build:shady--><!--css-build:shady--><div class="stroke style-scope yt-interaction"></div><div class="fill style-scope yt-interaction"></div></yt-interaction></yt-icon-button> </div> <div id="creator-heart-button" class="style-scope yt-live-chat-paid-message-renderer"></div> </div> </div> <div id="content" class="style-scope yt-live-chat-paid-message-renderer"> <div id="message" dir="auto" class="style-scope yt-live-chat-paid-message-renderer"></div> <div id="input-container" class="style-scope yt-live-chat-paid-message-renderer"> <dom-if class="style-scope yt-live-chat-paid-message-renderer"><template is="dom-if"></template></dom-if> </div> <yt-formatted-string id="deleted-state" class="style-scope yt-live-chat-paid-message-renderer" is-empty=""><!--css-build:shady--><!--css-build:shady--><yt-attributed-string class="style-scope yt-formatted-string"></yt-attributed-string></yt-formatted-string> <div id="footer" class="style-scope yt-live-chat-paid-message-renderer"></div> </div> </div> <div id="lower-bumper" class="style-scope yt-live-chat-paid-message-renderer"></div> <div id="buy-flow-button" class="style-scope yt-live-chat-paid-message-renderer" hidden=""></div> <div id="inline-action-button-container" class="style-scope yt-live-chat-paid-message-renderer" aria-hidden="true"> <div id="inline-action-buttons" class="style-scope yt-live-chat-paid-message-renderer"></div> </div> </yt-live-chat-paid-message-renderer>
          {{-- Super Chatter --}}
          <!-- Owner Chatter Start -->
          <yt-live-chat-text-message-renderer class="style-scope yt-live-chat-item-list-renderer" whole-message-clickable="" has-inline-action-buttons="3" author-is-owner="" author-type="owner">
            <yt-img-shadow id="author-photo" class="no-transition style-scope yt-live-chat-text-message-renderer" height="24" width="24" style="background-color: transparent;" loaded="">
              <img id="img" draggable="false" class="style-scope yt-img-shadow" alt="" src="https://lh3.googleusercontent.com/d/1yZr7G20wox796hq5FSUBXjz_JioVcF3R" width="24" height="24">
            </yt-img-shadow>
            <div id="content" class="style-scope yt-live-chat-text-message-renderer">
              <span id="timestamp" class="style-scope yt-live-chat-text-message-renderer">11:32 AM</span>
              <yt-live-chat-author-chip class="style-scope yt-live-chat-text-message-renderer" is-highlighted="">
                <span id="prepend-chat-badges" class="style-scope yt-live-chat-author-chip"></span>
                <span id="author-name" dir="auto" class="owner style-scope yt-live-chat-author-chip">Owner Chat <span id="chip-badges" class="style-scope yt-live-chat-author-chip"></span>
                </span>
                <span id="chat-badges" class="style-scope yt-live-chat-author-chip"></span>
              </yt-live-chat-author-chip>&ZeroWidthSpace; <span id="message" dir="auto" class="style-scope yt-live-chat-text-message-renderer">if you found any bug let me know <img class="emoji yt-formatted-string style-scope yt-live-chat-text-message-renderer" src="https://yt3.ggpht.com/HmsXEgqUogkQOnL5LP_FdPit9Z909RJxby-uYcPxBLNhaPyqPTcGwvGaGPk2hzB_cC0hs_pV=w48-h48-c-k-nd" alt="face-orange-biting-nails" data-emoji-id="UCkszU2WH9gy1mb0dV-11UJg/ygF1XpGUMMjk8gSDrI2wCx" shared-tooltip-text=":face-orange-biting-nails:" id="emoji-83">
              </span>
              <span id="deleted-state" class="style-scope yt-live-chat-text-message-renderer"></span>
              <a id="show-original" href="#" class="style-scope yt-live-chat-text-message-renderer"></a>
            </div>
            <div id="menu" class="style-scope yt-live-chat-text-message-renderer">
              <yt-icon-button id="menu-button" class="style-scope yt-live-chat-text-message-renderer">
                <button id="button" class="style-scope yt-icon-button" aria-label="Tindakan chat">
                  <yt-icon icon="more_vert" class="style-scope yt-live-chat-text-message-renderer">
                    <yt-icon-shape class="style-scope yt-icon">
                      <icon-shape class="yt-spec-icon-shape">
                        <div style="width: 100%; height: 100%; fill: currentcolor;">
                          <svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                            <path d="M12 16.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zM10.5 12c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5zm0-6c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5-1.5.67-1.5 1.5z"></path>
                          </svg>
                        </div>
                      </icon-shape>
                    </yt-icon-shape>
                  </yt-icon>
                </button>
                <yt-interaction id="interaction" class="circular style-scope yt-icon-button">
                  <div class="stroke style-scope yt-interaction"></div>
                  <div class="fill style-scope yt-interaction"></div>
                </yt-interaction>
              </yt-icon-button>
            </div>
            <div id="inline-action-button-container" class="style-scope yt-live-chat-text-message-renderer" aria-hidden="true">
              <div id="inline-action-buttons" class="style-scope yt-live-chat-text-message-renderer">
                <yt-button-renderer class="style-scope yt-live-chat-text-message-renderer style-default size-default" is-icon-button="" has-no-text="">
                  <a class="yt-simple-endpoint style-scope yt-button-renderer" tabindex="-1">
                    <yt-icon-button id="button" class="style-scope yt-button-renderer style-default size-default">
                      <button id="button" class="style-scope yt-icon-button" aria-label="Hapus">
                        <yt-icon class="style-scope yt-button-renderer">
                          <yt-icon-shape class="style-scope yt-icon">
                            <icon-shape class="yt-spec-icon-shape">
                              <div style="width: 100%; height: 100%; fill: currentcolor;">
                                <svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                                  <path d="M11 17H9V8h2v9zm4-9h-2v9h2V8zm4-4v1h-1v16H6V5H5V4h4V3h6v1h4zm-2 1H7v15h10V5z"></path>
                                </svg>
                              </div>
                            </icon-shape>
                          </yt-icon-shape>
                        </yt-icon>
                      </button>
                      <yt-interaction id="interaction" class="circular style-scope yt-icon-button">
                        <div class="stroke style-scope yt-interaction"></div>
                        <div class="fill style-scope yt-interaction"></div>
                      </yt-interaction>
                    </yt-icon-button>
                  </a>
                </yt-button-renderer>
                <yt-button-renderer class="style-scope yt-live-chat-text-message-renderer style-default size-default" is-icon-button="" has-no-text="">
                  <a class="yt-simple-endpoint style-scope yt-button-renderer" tabindex="-1">
                    <yt-icon-button id="button" class="style-scope yt-button-renderer style-default size-default">
                      <button id="button" class="style-scope yt-icon-button" aria-label="Masukkan pengguna dalam waktu tunggu">
                        <yt-icon class="style-scope yt-button-renderer">
                          <yt-icon-shape class="style-scope yt-icon">
                            <icon-shape class="yt-spec-icon-shape">
                              <div style="width: 100%; height: 100%; fill: currentcolor;">
                                <svg height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                                  <path d="M18 3h1V2H5v1h1v5.21L9.79 12 6 15.79V21H5v1h14v-1h-1v-5.21L14.21 12 18 8.21Zm-5.21 9L17 16.21V21H7v-4.79L11.21 12 7 7.79V3h10v4.79ZM12 16l4 4H8ZM9 7h6l-3 3Z"></path>
                                </svg>
                              </div>
                            </icon-shape>
                          </yt-icon-shape>
                        </yt-icon>
                      </button>
                      <yt-interaction id="interaction" class="circular style-scope yt-icon-button">
                        <div class="stroke style-scope yt-interaction"></div>
                        <div class="fill style-scope yt-interaction"></div>
                      </yt-interaction>
                    </yt-icon-button>
                  </a>
                </yt-button-renderer>
                <yt-button-renderer class="style-scope yt-live-chat-text-message-renderer style-default size-default" is-icon-button="" has-no-text="">
                  <a class="yt-simple-endpoint style-scope yt-button-renderer" tabindex="-1">
                    <yt-icon-button id="button" class="style-scope yt-button-renderer style-default size-default">
                      <button id="button" class="style-scope yt-icon-button" aria-label="Sembunyikan pengguna di channel ini">
                        <yt-icon class="style-scope yt-button-renderer">
                          <yt-icon-shape class="style-scope yt-icon">
                            <icon-shape class="yt-spec-icon-shape">
                              <div style="width: 100%; height: 100%; fill: currentcolor;">
                                <svg enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                                  <g>
                                    <path d="M12 3c-4.96 0-9 4.04-9 9s4.04 9 9 9 9-4.04 9-9-4.04-9-9-9m0-1c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm7 11H5v-2h14v2z"></path>
                                  </g>
                                </svg>
                              </div>
                            </icon-shape>
                          </yt-icon-shape>
                        </yt-icon>
                      </button>
                      <yt-interaction id="interaction" class="circular style-scope yt-icon-button">
                        <div class="stroke style-scope yt-interaction"></div>
                        <div class="fill style-scope yt-interaction"></div>
                      </yt-interaction>
                    </yt-icon-button>
                  </a>
                </yt-button-renderer>
              </div>
            </div>
          </yt-live-chat-text-message-renderer>
          <!-- Owner Chater Ends -->
          <!-- Membership Start -->
          <!-- Membership Ends -->
           <yt-reaction-control-panel-overlay>
  
                    <img alt="❤" width="18" height="18" class="yt-core-image yt-core-image--content-mode-scale-aspect-fill yt-core-image--loaded" src=" {{asset('src/basic-editor/emoji_u2764.svg')}} ">
                </button>
          
    </yt-reaction-control-panel-overlay>
      </div>
  
  </div>
</div>
  <script>
  const styleEl = document.createElement('style');
  document.head.appendChild(styleEl);
  let code = ``;
  let tempCode = ``;
    function applyCSS(cssCode) {
      let customStyle = document.getElementById('custom-style');
      if (!customStyle) {
        customStyle = document.createElement('style');
        customStyle.id = 'custom-style';
        document.head.appendChild(customStyle);
      }
      cssCode = cssCode.replace(/body\s*{[^}]*}/gi, '');
      customStyle.textContent = cssCode;
    }
const inputCSSUser = document.getElementById("myCssInput");
// Saat tombol "Terapkan CSS" ditekan
document.getElementById('applyCssBtn').addEventListener('click', () => {
  const cssCode = inputCSSUser.value;
  tempCode = cssCode;
  updateStyle();
  // applyCSS(cssCode);
  // localStorage.setItem('userCustomCSS', cssCode);  
});

document.getElementById('resetCssBtn').addEventListener('click', () => {
  // const cssCode = document.getElementById("myCssInput").value;
  // applyCSS('');
  tempCode = '';
  updateStyle();
  inputCSSUser.value= "";
  // localStorage.removeItem('userCustomCSS');
});
    const select = document.getElementById('codeOption');
    const textareaWrapper = document.getElementById('textareaWrapper');

    select.addEventListener('change', function () {
      if (this.value === 'replace') {
        textareaWrapper.classList.remove('hidden');
      } else {
        applyCSS(''); 
        textareaWrapper.classList.add('hidden');
      }
    });

 document.querySelectorAll('.tooltip').forEach(el => {
  el.addEventListener('mouseenter', () => {
    const box = document.createElement('div');
    box.className = 'tooltip-box';
    box.innerHTML = el.getAttribute('data-tooltip'); // ← pakai innerHTML untuk render tag HTML
    document.body.appendChild(box);

    const rect = el.getBoundingClientRect();
    const boxRect = box.getBoundingClientRect();

    box.style.top = `${rect.top + window.scrollY + rect.height / 2 - boxRect.height / 2}px`;
    box.style.left = `${rect.left + window.scrollX + rect.width + 8}px`;

    requestAnimationFrame(() => {
      box.style.opacity = 1;
    });

    el._tooltipBox = box;
  });

  el.addEventListener('mouseleave', () => {
    if (el._tooltipBox) {
      el._tooltipBox.remove();
      el._tooltipBox = null;
    }
  });
});

    const modeSelection = document.getElementById('codeOption');
    function isReplaceMode() {
        return modeSelection.value === 'replace' && myCssInput.value.trim() !== '';
    }

    let instruction = 'CSS copied to clipboard!\nAdd this code below your own code css';
  modeSelection.addEventListener('change', function () {
    if (modeSelection.value === 'replace') {
      instruction = 'CSS copied to clipboard!\n Put whole new code into browser obs';
    } else{
       instruction = 'CSS copied to clipboard!\nAdd this code below your own code css';
    }
  });
  function updateStyle() {
    
    let css = tempCode ?? '';


    // for reaction
    if (document.getElementById('chat-reaction').checked) {
      css += `
        yt-reaction-control-panel-overlay,
        yt-reaction-control-panel-overlay-view-model,
        yt-reaction-control-panel-view-model {
          display: none !important;
        }
      `;
    }
    // for shading
    if (document.getElementById('shading-on').checked) {
      css += `
      #items,
        yt-live-chat-app  {
          -webkit-mask-image: linear-gradient(0deg, rgba(0, 0, 0, 1) 30%, transparent 70%) !important;
          mask-image: linear-gradient(0deg, rgba(0, 0, 0, 1) 30%, transparent 70%) !important;
        }
      `;
    }

    // for wider
    if (document.getElementById('chat-wider').checked) {
      css += `
        yt-live-chat-text-message-renderer{
            display: block !important;
        }
      `;
    }
  
    // for buttons
    if (document.getElementById('chat-buttons').checked) {
      css += `
            
        #before-content-buttons{
        display: none !important;
        }
        #leaderboard-badge{
        display: none !important;
        }

      `;
    }
    
      previewCSS = css.replace(/body\s*{[^}]*}/gi, '');
      // Cek mode replace atau bukan
      const isReplace = isReplaceMode();
      if (!isReplace) {
        // Hapus baris display block hanya dari preview, bukan dari css utama
        previewCSS = previewCSS.replace(/display:\s*block\s*!important;\s*/g, '');
      }

      styleEl.textContent = previewCSS;
      code = css;
      console.log("isi", code);
  }

  document.querySelectorAll('input[name="chat-reaction"]').forEach(el => {
    el.addEventListener('change', updateStyle);
  });
  document.querySelectorAll('input[name="chat-wide"]').forEach(el => {
    el.addEventListener('change', updateStyle);
  });
  document.querySelectorAll('input[name="chat-buttons"]').forEach(el => {
    el.addEventListener('change', updateStyle);
  });
  document.querySelectorAll('input[name="chat-shading"]').forEach(el => {
    el.addEventListener('change', updateStyle);
  });


    function generateCSS(){
      console.log("ini generate", code);
        const output = document.getElementById('css-output');
        output.value = code.trim();

        // Copy clipboard
        navigator.clipboard.writeText(output.value).then(() => {
          alert(instruction);
        }).catch(err => {
          alert('Failed copied to clipboard: ' + err);
        });
    }
  updateStyle();
  </script>
</body>
</html>
