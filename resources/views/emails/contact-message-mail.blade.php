<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Hi Admin,You have New Message From <span style="text-decoration: underline;">{{@$contact->f_name}} {{@$contact->l_name}}</span></p>
<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Business Name : {{@$contact->b_name}}</p>
<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Business Website : {{@$contact->business_website}}</p>
<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Business Location : {{@$contact->business_location}}</p>
<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Industry : {{@$contact->industry}}</p>
<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Biggest : {{@$contact->biggest}}</p>
<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Message : {{@$contact->description}}</p>
<p style="color:#3d4852;font-size: 16px;line-height:1.5em;"><a href="{{route('login')}}">Click to login AHAP</a></p>