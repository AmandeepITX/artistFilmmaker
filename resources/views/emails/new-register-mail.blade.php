<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Hi Admin, </p>
<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">
@if(@$user->user_type == "user")
New User Register Name: {{@$user->f_name}}</p>
@else
New Company Register Name: {{@$user->f_name}}</p>
@endif
<p style="color:#3d4852;font-size: 16px;line-height:1.5em;"><a href="{{route('login')}}">Click to login AHAP</a>
