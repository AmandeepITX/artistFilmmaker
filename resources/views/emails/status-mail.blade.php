@extends('emails.layout.app')

@section('content')

    @if (@$users->status != 'unapproved')
        <div class="emailcard"
            style="background:#fff;width:500px;display:block;margin:0 auto;padding:50px;filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));">
            @if (@$users->user_type == 'artist')

                <div class="emailcard"
                    style="background:#fff;width:500px;display:block;margin:0 auto;padding:50px;filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));">
                    {{-- <p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">Artist request
                        approved! </p> --}}
                    <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Hi {{ ucfirst(@$users->first_name) }}, </p>


                    <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Your
                        {{ @$users->user_type }} profile has been {{ @$users->status }}. Please complete your profile. <a
                            href="https://portal.artistreplugged.com/"> <b> Click here to login. </b></a> </p>

                    <p style="color:#3d4852;font-size: 16px;line-height:1.5em;"> <b>Thanks</b></p>
                    <p style="color:#3d4852;font-size: 16px;line-height:1.5em;"> <b>Artist Replugged</b></p>


                </div>



            @else
                {{-- <p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">Filmmaker Profile
                    Approved! </p> --}}
                <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Hi {{ ucfirst(@$users->first_name) }}, </p>

                <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Your
                    {{ @$users->user_type }} profile has been {{ @$users->status }}. Please complete your profile. <a
                        href="https://portal.artistreplugged.com/"> <b> Click here to login.</b> </a></p>

                <p style="color:#3d4852;font-size: 16px;line-height:1.5em;"> <b>Thanks</b></p>
                <p style="color:#3d4852;font-size: 16px;line-height:1.5em;"> <b>Artist Replugged</b></p>

                <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">
                    <!--<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Comapny Name :{{ @$users->b_name }}</p>-->
                    <!--<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Comapny Address :{{ @$users->address }} </p>-->


        </div>
    @endif
@else
    @if (@$users->user_type == 'artist')
        <div class="emailcard"
            style="background:#fff;width:500px;display:block;margin:0 auto;padding:50px;filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));">
            {{-- <p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">Artist Profile
                Unapproved! </p> --}}
            <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Hi {{ ucfirst(@$users->first_name) }}, </p>


            <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Your
                {{ @$users->user_type }} request has been {{ @$users->status }}.
                {{-- <a href="https://portal.artistreplugged.com/"> <b> Click here to login. </b> </a>  --}}
            </p>

                    <p style="color:#3d4852;font-size: 16px;line-height:1.5em;"> <b>Thanks</b></p>
                    <p style="color:#3d4852;font-size: 16px;line-height:1.5em;"> <b>Artist Replugged</b></p>


        </div>
    @else
        <div class="emailcard"
            style="background:#fff;width:500px;display:block;margin:0 auto;padding:50px;filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));">
            {{-- <p style="color:#3d4852;font-size: 16px;line-height:1.5em; text-transform: capitalize;">Filmmaker Profile
                Unapproved! </p> --}}
            <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Hi {{ ucfirst(@$users->first_name) }}, </p>
            <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Your
                {{ @$users->user_type }} request has been {{ @$users->status }}.
                {{-- <a href="https://portal.artistreplugged.com/"> <b> Click here to login.</b> </a> --}}
                 </p>

            <p style="color:#3d4852;font-size: 16px;line-height:1.5em;"> <b>Thanks</b></p>
            <p style="color:#3d4852;font-size: 16px;line-height:1.5em;"> <b>Artist Replugged</b></p>

            {{--<p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Comapny Name :{{ @$users->b_name }}</p>
            <p style="color:#3d4852;font-size: 16px;line-height:1.5em;">Comapny Address :{{ @$users->address }} </p> --}}

        </div>
    @endif
    @endif


@endsection
