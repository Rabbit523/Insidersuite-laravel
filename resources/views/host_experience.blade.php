@extends('layout')

@section('title','Insider Suite |  Experience')
@section('head')
@parent
<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('css/magicsuggest-min.css') }}">
<link rel="stylesheet" href="{{ url('css/customize/experience.css') }}">
@endsection

@section('content')
<div class="content">
  <div class="inner_content">
    <div class="step0">
      <div class="_typbqzd">
        <div class="_c0gjcf">
          <div>
            <div class="_12ei9u44"> Hi, {{Auth::User()->username}}! </div>
          </div>
          <div style="margin-top: 16px; margin-bottom: 16px;">
            <div style="margin-top: 16px; margin-bottom: 16px;">
<div class="_ncwphzu">We’re excited to be part of  <b>the unique experience you'll live. </b></div>
            </div>
            <div style="margin-top: 16px; margin-bottom: 16px;">
            <div class="_ncwphzu">From the latest <b>trendy boutique villa</b> to the most <b>extreme activity</b> or <b>cultural event</b>, we take care of every details for your next trip, even the ones a lambda tourist wouldn’t have access to...
            </div>
            </div>
          </div>
          <div>
            <div style="margin-top: 32px; margin-bottom: 32px;">
              <button type="button" id="next_step0" class="btn next" aria-busy="false"><span class="_cgr7tc7"><span>Next</span></span></button>
            </div>
          </div>
        </div>
      </div>
      <div class="_ugd6bx">
        <div class="_1f6oxkn">
          <div class="_10105j3">
            <div class="_e296pg" style="width: 100%; height: 100%;">
              <div class="_6ikqekk" role="img" aria-label="intro" style="width: 100%; height: 100%; background-image: url('imgs/discover-1.jpg');"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="step1">
      <div class="_1dnc5pl">
        <div class="_1b08ubc">
          <div class="_1l4vj07">
            <div class="_12ei9u44"> Fasten your seatbelt, It's time to upgrade the way you travel 🔥 </div>
          </div>
        </div>
      </div>
      <div class="_1afoiga">
        <div class="_1nw0tbq">
          <button type="button" id="back_step1" class="_1hm6r1so" aria-busy="false">
            <div class="_qtix31">
              <div class="_ni9axhe">
                <div style="margin-right:8px;padding-top:2px;"><svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; display: block; fill: rgb(255, 51, 102);"><path d="m13.7 16.29a1 1 0 1 1 -1.42 1.41l-8-8a1 1 0 0 1 0-1.41l8-8a1 1 0 1 1 1.42 1.41l-7.29 7.29z" fill-rule="evenodd"></path></svg></div>
              </div>
              <div class="_ni9axhe"><span>Back</span></div>
            </div>
          </button>
        </div>
        <div class="_dgjope" style="width: 16%;"></div>
      </div>
    </div>
    <div class="step2">
      <div class="_typbqzd">
        <div class="_c0gjcf">
          <div>
        <div class="_12ei9u44"> It is the best-kept travel secret, a plan that is exchanged between insiders ... </div>
          </div>
          <div style="margin-top: 16px; margin-bottom: 16px;">
            <ul>
              <div style="margin-top: 16px; margin-bottom: 16px;"><li><div class="_ncwphzu">Far from stagnant trips filled with standardized places and played out experiences Insider Suite gives you the tool to create a new way of travelling - unique and authentic. </div></li></div>
            <div style="margin-top: 16px; margin-bottom: 16px;"><li><div class="_ncwphzu">Explore each destination and experience different villas and activities along the way, and infuse our experiences with their perspectives.</div></li></div>
            <div style="margin-top: 16px; margin-bottom: 16px;"><li><div class="_ncwphzu">Unbeatable rates and exclusive benefits</div></li></div>
              <div style="margin-top: 16px; margin-bottom: 16px;"><li><div class="_ncwphzu">Customer service is at your disposal every day of the week to answer your questions</div></li></div>
            </ul>
          </div>
          <div>
            <div style="margin-top: 32px; margin-bottom: 32px;">
              <button type="button" class="btn next" id="next_step2" aria-busy="false"><span class="_cgr7tc7"><span>Next</span></span></button>
            </div>
          </div>
        </div>
      </div>
      <div class="_ugd6bx">
        <div class="_1f6oxkn">
          <div class="_10105j3">
            <div class="_e296pg" style="width: 100%; height: 100%;">
              <div class="_6ikqekk" role="img" aria-label="looking-for" style="width: 100%; height: 100%; background-image: url('imgs/discover-2.jpg');"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="_1afoiga">
        <div class="_1nw0tbq">
          <button type="button" id="back_step2" class="_1hm6r1so" aria-busy="false">
            <div class="_qtix31">
              <div class="_ni9axhe">
                <div style="margin-right:8px;padding-top:2px;"><svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; display: block; fill: rgb(255, 51, 102);"><path d="m13.7 16.29a1 1 0 1 1 -1.42 1.41l-8-8a1 1 0 0 1 0-1.41l8-8a1 1 0 1 1 1.42 1.41l-7.29 7.29z" fill-rule="evenodd"></path></svg></div>
              </div>
              <div class="_ni9axhe"><span>Back</span></div>
            </div>
          </button>
        </div>
        <div class="_dgjope" style="width: 32%;"></div>
      </div>
    </div>
    <div class="step3">
      <div class="works">
        <div class="_12ei9u44"> Insider Suite benefits</div>
        <div></div>
        <div class="hm-splash-page--benefit-container">
          <div class="hm-splash-page--benefit-item">
            <img src="../imgs/benefit-3_pink.png" alt="">
            <h4>First-come, first-served</h4>
            <p>If our members enjoy <b>exclusive rates</b> it is because our offers are in <b>limited quantities</b>, so <b>be quick</b></p>
          </div>
          <div class="hm-splash-page--benefit-item">
            <img src="../imgs/benefit-2_pink.png" alt="">
            <h4>Personalize your Holiday</h4>
            <p><b>A complete day-by-day itinerary</b> based on your <b>personal interests</b> and <b>preferences</b>. <b>New experiences, new surprises</b>. your Holiday will no longer be the same.</p>
          </div>
          <div class="hm-splash-page--benefit-item">
            <img src="../imgs/benefit-1_pink.png" alt="">
            <h4>Share with us your experience</h4>
            <p>Help us shape the future of Insider Suite by <b>voting for new destinations</b> and <b>new activities</b>.</p>
          </div>
        </div>
        <button type="button" class="btn next" id="next_step3" aria-busy="false"><span class="_cgr7tc7"><span>Next</span></span></button>
      </div>
      <div class="_ugd6bx">
        <div class="_1f6oxkn">
          <div class="_10105j3">
            <div class="_e296pg" style="width: 100%; height: 100%;">
              <div class="_6ikqekk" role="img" aria-label="not-looking-for" style="width: 100%; height: 100%; background-image: url('imgs/discover-3.jpg');"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="_1afoiga">
        <div class="_1nw0tbq">
          <button type="button" id="back_step3" class="_1hm6r1so" aria-busy="false">
            <div class="_qtix31">
              <div class="_ni9axhe">
                <div style="margin-right:8px;padding-top:2px;"><svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; display: block; fill: rgb(255, 51, 102);"><path d="m13.7 16.29a1 1 0 1 1 -1.42 1.41l-8-8a1 1 0 0 1 0-1.41l8-8a1 1 0 1 1 1.42 1.41l-7.29 7.29z" fill-rule="evenodd"></path></svg></div>
              </div>
              <div class="_ni9axhe"><span>Back</span></div>
            </div>
          </button>
        </div>
        <div class="_dgjope" style="width: 48%;"></div>
      </div>
    </div>
    <div class="step4">
      <div class="_1dnc5pl">
        <div class="_1b08ubc">
          <div class="_1l4vj07">
            <div class="_12ei9u44"> Great! Now that you know what an experience is, we’d like to learn a bit about your style ✌️</div>
          </div>
        </div>
      </div>
      <div class="_1afoiga">
        <div class="_1nw0tbq">
          <button type="button" id="back_step4" class="_1hm6r1so" aria-busy="false">
            <div class="_qtix31">
              <div class="_ni9axhe">
                <div style="margin-right:8px;padding-top:2px;"><svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; display: block; fill: rgb(255, 51, 102);"><path d="m13.7 16.29a1 1 0 1 1 -1.42 1.41l-8-8a1 1 0 0 1 0-1.41l8-8a1 1 0 1 1 1.42 1.41l-7.29 7.29z" fill-rule="evenodd"></path></svg></div>
              </div>
              <div class="_ni9axhe"><span>Back</span></div>
            </div>
          </button>
        </div>
        <div class="_dgjope" style="width: 64%;"></div>
      </div>
    </div>
    <div class="step5">
      <div class="step-content">
        <div class="works">
          <div class="header">
            <div class="_12ei9u44"> Tell us about yourself</div>
          </div>
          <div class="profile-content">
            <div class="profile">
              <div class="AvatarEditor__Container-au91t-0 jZdnvR" style="margin-bottom: 40px;">
                <div class="AvatarEditor__Avatar-au91t-1 elakDd">
                  <img class="AvatarEditor__AvatarImg-au91t-2 bbGlpa" id="new_img" alt="Avatar" width="150" height="150" src="//res.cloudinary.com/staycation/image/upload/q_auto,fl_lossy,f_auto/c_scale,dpr_2/c_fill,g_face,w_90,h_90/v1497970672/common/static/default-avatar">
                  <label for="avatarInput">
                    <div class="AvatarEditor__CameraContainer-au91t-3 jlUgds" id="avatar_button">
                      <svg viewBox="0 0 24 24" width="16" height="16"><g fill="currentColor" fill-rule="nonzero"><path d="M8.401 2.75L6.624 5.416A.75.75 0 0 1 6 5.75H3c-.69 0-1.25.56-1.25 1.25v13c0 .69.56 1.25 1.25 1.25h18c.69 0 1.25-.56 1.25-1.25V7c0-.69-.56-1.25-1.25-1.25h-3a.75.75 0 0 1-.624-.334L15.599 2.75H8.4zm10 1.5H21A2.75 2.75 0 0 1 23.75 7v13A2.75 2.75 0 0 1 21 22.75H3A2.75 2.75 0 0 1 .25 20V7A2.75 2.75 0 0 1 3 4.25h2.599l1.777-2.666A.75.75 0 0 1 8 1.25h8a.75.75 0 0 1 .624.334l1.777 2.666z"></path><path d="M12 18.75a5.25 5.25 0 1 1 0-10.5 5.25 5.25 0 0 1 0 10.5zm0-1.5a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5zM18.125 8.99a.875.875 0 1 1 1.75 0V9a.875.875 0 1 1-1.75 0v-.01z"></path></g></svg>
                    </div>
                  </label>
                </div>
                <div class="AvatarEditor__Action-au91t-4 gRyTDd">
                  <label for="avatarInput">
                    <div role="button" id="avatar_link" class="AvatarEditor__ActionButton-au91t-5 kGsBD">Upload your profile picture</div>
                  </label>
                  <input class="AvatarEditor__InvisibleInput-au91t-6 bJGPFf" id="avatarUpload" type="file" accept="image/*">
                </div>
              </div>

            </div>
            <div class="message">
                <h4>Countries that you are dreaming about?</h4>
                <input id="indicate">
                <h4>How often do you travel?</h4>
                <input id="indicate_travel" placeholder="Input the country">
                <h4>Email address of your favorite travel buddy?</h4>
                <input id="travel_buddy">
                <h4>What activity are you most excited about?</h4><br>
                <input id="activity_name">
            </div>
          </div>
              <div>
                  <button type="button" class="btn skip" id="next_step5" aria-busy="false"><span class="_cgr7tc7"><span>Save</span></span></button>
                  <button type="button" class="btn skip_" id="next_step5_skip" aria-busy="false"><span class="_cgr7tc7"><span>Skip</span></span></button>
                  </div>
        </div>
        <div class="_ugd6bx">
          <div class="_1f6oxkn">
            <div class="_10105j3">
              <div class="_e296pg" style="width: 100%; height: 100%;">
                <div class="_6ikqekk" role="img" aria-label="first-ten-min" style="width: 100%; height: 100%; background-image: url('imgs/discover-4.jpg');"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="_1afoiga">
        <div class="_1nw0tbq">
          <button type="button" id="back_step5" class="_1hm6r1so" aria-busy="false">
            <div class="_qtix31">
              <div class="_ni9axhe">
                <div style="margin-right:8px;padding-top:2px;"><svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; display: block; fill: rgb(255, 51, 102);"><path d="m13.7 16.29a1 1 0 1 1 -1.42 1.41l-8-8a1 1 0 0 1 0-1.41l8-8a1 1 0 1 1 1.42 1.41l-7.29 7.29z" fill-rule="evenodd"></path></svg></div>
              </div>
              <div class="_ni9axhe"><span>Back</span></div>
            </div>
          </button>
        </div>
        <div class="_dgjope" style="width: 80%;"></div>
      </div>
    </div>
    <div class="step6">
      <div class="works">
        <div class="header">
          <h2>What does hospitality mean to you?</h2>
        </div>
        <div class="message">
          <textarea id="second-ten-min" class="_ibk00h" name="second-ten-min" placeholder=""></textarea>
          <button type="button" class="btn next" id="next_step6" aria-busy="false"><span class="_cgr7tc7"><span>Next</span></span></button>
        </div>
      </div>
      <div class="_ugd6bx">
        <div class="_1f6oxkn">
          <div class="_10105j3">
            <div class="_e296pg" style="width: 100%; height: 100%;">
              <div class="_6ikqekk" role="img" aria-label="first-ten-min" style="width: 100%; height: 100%; background-image: url('imgs/discover-2.jpg');"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="_1afoiga">
        <div class="_1nw0tbq">
          <button type="button" id="back_step6" class="_1hm6r1so" aria-busy="false">
            <div class="_qtix31">
              <div class="_ni9axhe">
                <div style="margin-right:8px;padding-top:2px;"><svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; display: block; fill: rgb(255, 51, 102);"><path d="m13.7 16.29a1 1 0 1 1 -1.42 1.41l-8-8a1 1 0 0 1 0-1.41l8-8a1 1 0 1 1 1.42 1.41l-7.29 7.29z" fill-rule="evenodd"></path></svg></div>
              </div>
              <div class="_ni9axhe"><span>Back</span></div>
            </div>
          </button>
        </div>
        <div class="_dgjope" style="width: 90%;"></div>
      </div>
    </div>
    <div class="step7">
      <div class="_typbqzd">
        <div class="_c0gjcf">
          <div>
            <div class="_12ei9u44"> Thanks! Now it’s time to start creating your experience. </div>
          </div>
          <div style="margin-top: 16px; margin-bottom: 16px;">
            <div style="margin-top: 16px; margin-bottom: 16px;">
              <div>
                <div class="_qtix31">
                  <div class="_1thk0tsb">
                    <div style="margin-right: 8px;">
                      <div style="margin-top: 8px;"><svg viewBox="0 0 32 32" role="presentation" aria-hidden="true" focusable="false" style="height: 18px; width: 18px; display: block; fill: rgb(0, 132, 137);"><path d="m21.71 13.71-6 6c-.39.39-1.02.39-1.41 0l-3-3c-.39-.39-.39-1.02 0-1.41s1.02-.39 1.41 0l2.29 2.29 5.29-5.29c.39-.39 1.02-.39 1.41 0s .39 1.02 0 1.41m-5.71-13.71c-8.84 0-16 7.16-16 16s7.16 16 16 16 16-7.16 16-16-7.16-16-16-16"></path></svg></div>
                    </div>
                  </div>
                  <div class="_1thk0tsb">
            <div class="_gttisv7">Discover our destinations</div>
            <div class="_ncwphzu">Find out every two weeks a new destinations with its surprises along the way.</div>
                  </div>
                </div>
              </div>
            </div>
            <div style="margin-top: 16px; margin-bottom: 16px;">
              <div>
                <div class="_qtix31">
                  <div class="_1thk0tsb">
                    <div style="margin-right: 8px;">
                      <div class="_gttisv7">②</div>
                    </div>
                  </div>
                  <div class="_1thk0tsb">
                    <div class="_gttisv7">Create your experience</div>
                    <div class="_ncwphzu">Book multiple accomodations and activities into your trip.</div>
                  </div>
                </div>
              </div>
            </div>
            <div style="margin-top: 16px; margin-bottom: 16px;">
              <div>
                <div class="_qtix31">
                  <div class="_1thk0tsb">
                    <div style="margin-right: 8px;">
                      <div class="_gttisv7">③</div>
                    </div>
                  </div>
                  <div class="_1thk0tsb">
                    <div class="_gttisv7">Submit and travel</div>
                    <div class="_ncwphzu">Share the trip with your loved ones and travel with a spirit of lightness !</div>
                  </div>
                </div>
              </div>
            </div>
            <div style="margin-top: 32px; margin-bottom: 32px;">
              <div><span><a id="create_experience" type="button" class="btn next" aria-busy="false"><span class="_cgr7tc7">Create an experience</span></a></span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="_ugd6bx">
        <div class="_1f6oxkn">
          <div class="_10105j3">
            <div class="_e296pg" style="width: 100%; height: 100%;">
              <div class="_6ikqekk" role="img" aria-label="finish" style="width: 100%; height: 100%; background-image: url('imgs/discover-2.jpg');""></div>
            </div>
          </div>
        </div>
      </div>
      <div class="_1afoiga">
        <div class="_1nw0tbq">
          <button type="button" id="back_step7" class="_1hm6r1so" aria-busy="false">
            <div class="_qtix31">
              <div class="_ni9axhe">
                <div style="margin-right:8px;padding-top:2px;"><svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 12px; width: 12px; display: block; fill: rgb(255, 51, 102);"><path d="m13.7 16.29a1 1 0 1 1 -1.42 1.41l-8-8a1 1 0 0 1 0-1.41l8-8a1 1 0 1 1 1.42 1.41l-7.29 7.29z" fill-rule="evenodd"></path></svg></div>
              </div>
              <div class="_ni9axhe"><span>Back</span></div>
            </div>
          </button>
        </div>
        <div class="_dgjope" style="width: 100%;"></div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="{{ url('js/magicsuggest-min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/customize/experience.js') }}"></script>
@endsection
