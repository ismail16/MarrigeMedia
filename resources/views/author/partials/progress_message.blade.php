<?php 
    $user = Auth::user();
    $PersonalInfo = \App\Models\PersonalInfo::where('user_id', $user->id)->first();
    $UserProfileImage = \App\Models\UserProfileImage::where('user_id', $user->id)->first();
    $Preference = \App\Models\Preference::where('user_id', $user->id)->first();
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
@if($user->role->id != 1)
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
                <a href="{{ route('member.personal-info.create') }}" class="btn btn-xs btn-primary"> Personal Information</a>
            @endif
            @if(!$UserProfileImage) 
                <a href="{{ route('member.images.create') }}" class="btn btn-xs btn-primary"> Images</a>
            @endif
            @if(!$Preference)
                <a href="{{ route('member.preference.create') }}" class="btn btn-xs btn-primary"> Preference</a>
            @endif
            <strong>to Make Your Profile 100%.</strong>
        </span>
        
    </div>
    @endif
@endif