@extends('emails.layout.app')

@section('content')



@if(@$users->status !="unapproved")
<div class="emailcard" style="background:#fff;width:500px;display:block;margin:0 auto;padding:50px;filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));">

    @if(@$users->user_type == "artist")

    <div class="emailcard" style="background:#fff;width:500px;display:block;margin:0 auto;padding:50px;filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));">
<p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">User request approved!  </p>
    <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Hi {{@$users->first_name}}, </p>


    <p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">Your {{@$users->user_type}} profile has been {{@$users->status}}. Please complete your profile. <a href="https://portal.artistreplugged.com/"> <b> Click here to login. </b></a> </p>

</div>

    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
        <tr>
            <td>&nbsp;</td>
            <td class="container">
                <div class="content">

                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role="presentation" class="main">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class="wrapper" style="background-image">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="text-align: center;" class="mpbile-full">
                                            <span class="member-img"><img src="{{ env('APP_URL') .'/uploads/user/headshot_card/' . @$users->headshot_card }}"></span>
                                            <p class="member-name">{{ $users->username }}</p>
                                            {{-- <p class="member-id">Member Id# {{ $users->member_id }}</p> --}}
                                            <!--<p class="member-id">Email {{ $users->email }}</p>-->
                                            <!--<p class="member-id">Phone no : {{ $users->phone }}</p>-->
                                        </td>
                                        <td class="mpbile-full">
                                            <h2 class="ahap-heading">Artist Replugged</h2>
                                            {{-- <p class="ahap-sub-heading">AMERICAN HEROES APPRECIATION PROGRAM</p> --}}
                                            {{-- <h3 class="ploice-office">{{ $users->service }}</h3> --}}
                                            <!--<p class="grey-text">Date of Service</p>-->
                                            @if($users->service_from !=null)
                                         <h4 class="h4-design">{{ $users->service_from }} @if($users->service_to )-{{ $users->service_to }} @endif</h4>

                                            @else
                                            <h4 class="h4-design">{{ $users->service_status }}</h4>
                                            @endif

                                            <!--<p class="grey-text">{{ $users->personalization }}</p>-->
                                            <!--<h4 class="h4-design">{{$users->city}} {{$users->state}}</h4>-->
                                        </td>
                                        <td class="mpbile-full">
                                            <a href="https://portal.artistreplugged.com/" class="web-link">www.portal.artistreplugged.com</a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->
                </div>
            </td>
            <td>&nbsp;</td>
        </tr>
    </table>



    @else
     <p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">Filmmaker Profile Approved!  </p>
    <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Hi {{@$users->first_name}}, </p>

    <p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">Your {{@$users->user_type}} profile has been {{@$users->status}}. Please complete your profile. <a href="https://portal.artistreplugged.com/"> <b> Click here to login.</b> </a></p>

    <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">
    <!--<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Comapny Name :{{@$users->b_name}}</p>-->
    <!--<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Comapny Address :{{@$users->address}} </p>-->


</div>
@endif

@else

@if (@$users->user_type == "artist")

<div class="emailcard" style="background:#fff;width:500px;display:block;margin:0 auto;padding:50px;filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));">
<p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">Artist Profile Unapproved!  </p>
    <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Hi {{@$users->first_name}}, </p>


    <p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">Your {{@$users->user_type}} request has been {{@$users->status}}. <a href="https://portal.artistreplugged.com/"> <b> Click here to login. </b> </a> </p>

</div>

@else
<div class="emailcard" style="background:#fff;width:500px;display:block;margin:0 auto;padding:50px;filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));">
    <p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">Filmmaker Profile Unapproved!  </p>
    <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Hi {{@$users->first_name}}, </p>
    <p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">Your {{@$users->user_type}} request has been {{@$users->status}}. <a href="https://portal.artistreplugged.com/"> <b>  Click here to login.</b> </a> </p>
    <!--<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Comapny Name :{{@$users->b_name}}</p>-->
    <!--<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Comapny Address :{{@$users->address}} </p>-->

</div>

@endif
@endif


@endsection
