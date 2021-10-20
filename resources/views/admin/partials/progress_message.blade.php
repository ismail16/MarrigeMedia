<?php 
    $full_url = url()->current();
    $full_url = explode('/', $full_url);
    $full_url = array_filter($full_url);
    $full_url = array_merge($full_url, array()); 
    $user_id = $full_url[4];

    $PersonalInfo = \App\Models\PersonalInfo::where('user_id', $user_id)->first();
    $UserProfileImage = \App\Models\UserProfileImage::where('user_id', $user_id)->first();
    $Preference = \App\Models\Preference::where('user_id', $user_id)->first();
    $a = 20;
    if ($PersonalInfo) {
        $b = 40;
    }else{ $b=0; }
    if ($UserProfileImage) {
        $c = 20;
    }else{ $c=0; }
    if ($Preference) {
        $d = 20;
    }else{ $d=0; }
    $persent = $a+$b+$c+$d;
?>
@if(!$PersonalInfo || !$UserProfileImage || !$Preference)
<div class="alert alert-warning alert-dismissible pt-3 pr-4 pl-4 pb-3 fade show mt-2" role="alert">
    <button type="button" class="close text-danger pt-0 pr-1" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    <div class="progress mb-2 text-center">
      <div class="progress-bar bg-primary" role="progressbar" style="width: {{$persent}}%;" aria-valuenow="{{$persent}}" aria-valuemin="0" aria-valuemax="100">
          <strong>{{$persent}}%</strong>
      </div>
    </div>
    <span class="">
        <strong>You should Set</strong><br>
        @if(!$PersonalInfo)
        <a href="{{ route('admin.user-info.personal-info.create', $user_id ) }}" class="btn btn-sm m-2 btn-primary">Set Personal Info</a>
        @endif
        @if(!$UserProfileImage) 
            <a href="{{ route('admin.user-info.images.create', $user_id ) }}" class="btn btn-sm m-2 btn-primary float-right">Upload Images</a>
        @endif
        @if(!$Preference)
        <a href="{{ route('admin.user-info.preference.create',$user_id ) }}" class="btn btn-sm m-2 btn-primary">Set Preference</a>
        @endif
        <strong>to Make Your Profile 100%.</strong>
    </span>
      
</div>
@endif