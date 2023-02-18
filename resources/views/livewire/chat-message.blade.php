 <div class="app-inner-layout__wrapper">
     <div class="app-inner-layout__content card">
         <div class="table-responsive">
             <div class="app-inner-layout__top-pane">
                 <div class="pane-left">
                     <div class="mobile-app-menu-btn">
                         <button type="button" class="hamburger hamburger--elastic">
                             <span class="hamburger-box">
                                 <span class="hamburger-inner"></span>
                             </span>
                         </button>
                     </div>
                     <div class="avatar-icon-wrapper mr-2">
                         <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                         </div>
                         <div class="avatar-icon avatar-icon-xl rounded">
                             <img width="82" src="/architectui/assets/images/avatars/1.jpg" alt="">
                         </div>
                     </div>
                     <h4 class="mb-0 text-nowrap">{{ __($conversation[0]->user_id_2) }}
                         <div class="opacity-7">Last Seen Online:
                             <span class="opacity-8">10 minutes ago</span>
                         </div>
                     </h4>
                 </div>
                 <div class="pane-right">
                     <div class="btn-group dropdown">
                         <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                             class="ml-2 dropdown-toggle btn btn-primary">
                             <span class="opacity-7 mr-1">
                                 <i class="fa fa-cog"></i>
                             </span>
                             Actions
                         </button>
                         <div tabindex="-1" role="menu" aria-hidden="true"
                             class="dropdown-menu dropdown-menu-right">
                             <ul class="nav flex-column">
                                 <li class="nav-item-header nav-item">Activity</li>
                                 <li class="nav-item">
                                     <a href="javascript:void(0);" class="nav-link">Chat
                                         <div class="ml-auto badge badge-pill badge-info">8</div>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="javascript:void(0);" class="nav-link">Recover Password</a>
                                 </li>
                                 <li class="nav-item-header nav-item">My Account</li>
                                 <li class="nav-item">
                                     <a href="javascript:void(0);" class="nav-link">Settings
                                         <div class="ml-auto badge badge-success">New</div>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="javascript:void(0);" class="nav-link">Messages
                                         <div class="ml-auto badge badge-warning">512</div>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="javascript:void(0);" class="nav-link">Logs</a>
                                 </li>
                                 <li class="nav-item-divider nav-item"></li>
                                 <li class="nav-item-btn nav-item">
                                     <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="chat-wrapper">
                 @forelse($conversation[0]->message as $msg)
                     @if (auth()->user()->id != $msg->user_id)
                         <div class="chat-box-wrapper">
                             <div>
                                 <div class="avatar-icon-wrapper mr-1">
                                     <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                     </div>
                                     <div class="avatar-icon avatar-icon-lg rounded">
                                         <img src="/architectui/assets/images/avatars/2.jpg" alt="">
                                     </div>
                                 </div>
                             </div>
                             <div>
                                 <div class="chat-box">{{ $msg->content }}</div>
                                 <small class="opacity-6">
                                     <i class="fa fa-calendar-alt mr-1"></i>
                                     11:01 AM | Yesterday
                                 </small>
                             </div>
                         </div>
                     @else
                         <div class="float-right chat-box-wrapper">
                             <div class="chat-box-wrapper chat-box-wrapper-right">
                                 <div>
                                     <div class="chat-box">{{ $msg->content }}</div>
                                     <small class="opacity-6">
                                         <i class="fa fa-calendar-alt mr-1"></i>
                                         11:01 AM | Yesterday
                                     </small>
                                 </div>
                                 <div>
                                     <div class="avatar-icon-wrapper ml-1">
                                         <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                         </div>
                                         <div class="avatar-icon avatar-icon-lg rounded">
                                             <img src="/architectui/assets/images/avatars/2.jpg" alt="">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endif

                 @empty
                     <p>No Message found</p>
                 @endforelse


             </div>
             <div class="app-inner-layout__bottom-pane d-block text-center">
                 <div class="mb-0 position-relative row form-group">
                     <div class="col-sm-12 d-flex">
                         <input wire:model="message" placeholder="Write here and hit enter to send..." type="text"
                             class="form-control-lg form-control">
                         <button wire:click="sendMessage" class="btn btn-primary">send</button>
                     </div>
                     @error('message')
                         <span class="text-danger">{{ $message }}</span>
                     @enderror
                 </div>
             </div>
         </div>
     </div>
     <div class="app-inner-layout__sidebar card">
         <div class="app-inner-layout__sidebar-header">
             <ul class="nav flex-column">
                 <li class="pt-4 pl-3 pr-3 pb-3 nav-item">
                     <div class="input-group">
                         <div class="input-group-prepend">
                             <div class="input-group-text">
                                 <i class="fa fa-search"></i>
                             </div>
                         </div>
                         <input placeholder="Search..." type="text" class="form-control">
                     </div>
                 </li>
                 <li class="nav-item-header nav-item">Friends Online</li>
             </ul>
         </div>
         <ul class="nav flex-column">
             @forelse($users as $user)
                 <li class="nav-item">
                     <button type="button" tabindex="0" class="dropdown-item">
                         <div class="widget-content p-0">
                             <div class="widget-content-wrapper">
                                 <div class="widget-content-left mr-3">
                                     <div class="avatar-icon-wrapper">
                                         <div class="badge badge-bottom badge-success badge-dot badge-dot-lg">
                                         </div>
                                         <div class="avatar-icon">
                                             <img src="/architectui/assets/images/avatars/2.jpg" alt="">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="widget-content-left">
                                     <div class="widget-heading">{{ __($user->name) }}</div>
                                     <div class="widget-subheading">{{ __(\Str::random(10)) }}</div>
                                 </div>
                             </div>
                         </div>
                     </button>
                 </li>
             @empty
                 <li class="nav-item">No User Found</li>
             @endforelse


         </ul>
         <div class="app-inner-layout__sidebar-footer pb-3">
             <ul class="nav flex-column">
                 <li class="nav-item-divider nav-item"></li>
                 <li class="nav-item-header nav-item">Offline Friends</li>
                 <li class="text-center p-2 nav-item">
                     <div class="avatar-wrapper avatar-wrapper-overlap">
                         <div class="avatar-icon-wrapper">
                             <div class="badge badge-bottom badge-danger badge-dot badge-dot-lg"></div>
                             <div class="avatar-icon rounded">
                                 <img src="/architectui/assets/images/avatars/5.jpg" alt="">
                             </div>
                         </div>
                         <div class="avatar-icon-wrapper">
                             <div class="badge badge-bottom badge-danger badge-dot badge-dot-lg"></div>
                             <div class="avatar-icon rounded">
                                 <img src="/architectui/assets/images/avatars/10.jpg" alt="">
                             </div>
                         </div>
                         <div class="avatar-icon-wrapper">
                             <div class="badge badge-bottom badge-danger badge-dot badge-dot-lg"></div>
                             <div class="avatar-icon rounded">
                                 <img src="/architectui/assets/images/avatars/7.jpg" alt="">
                             </div>
                         </div>
                         <div class="avatar-icon-wrapper">
                             <div class="badge badge-bottom badge-danger badge-dot badge-dot-lg"></div>
                             <div class="avatar-icon rounded">
                                 <img src="/architectui/assets/images/avatars/8.jpg" alt="">
                             </div>
                         </div>
                         <div class="avatar-icon-wrapper">
                             <div class="badge badge-bottom badge-danger badge-dot badge-dot-lg"></div>
                             <div class="avatar-icon rounded">
                                 <img src="/architectui/assets/images/avatars/1.jpg" alt="">
                             </div>
                         </div>
                         <div class="avatar-icon-wrapper">
                             <div class="badge badge-bottom badge-danger badge-dot badge-dot-lg"></div>
                             <div class="avatar-icon rounded">
                                 <img src="/architectui/assets/images/avatars/2.jpg" alt="">
                             </div>
                         </div>
                         <div class="avatar-icon-wrapper">
                             <div class="badge badge-bottom badge-danger badge-dot badge-dot-lg"></div>
                             <div class="avatar-icon rounded">
                                 <img src="/architectui/assets/images/avatars/3.jpg" alt="">
                             </div>
                         </div>
                         <div class="avatar-icon-wrapper">
                             <div class="badge badge-bottom badge-danger badge-dot badge-dot-lg"></div>
                             <div class="avatar-icon rounded">
                                 <img src="/architectui/assets/images/avatars/4.jpg" alt="">
                             </div>
                         </div>
                         <div class="avatar-icon-wrapper avatar-icon-add">
                             <div class="avatar-icon rounded"><i>+</i></div>
                         </div>
                     </div>
                 </li>
                 <li class="nav-item-btn text-center nav-item">
                     <button class="btn-wide btn-pill btn btn-success btn-sm">Offline Group
                         Conversation</button>
                 </li>
             </ul>
         </div>
     </div>
 </div>
