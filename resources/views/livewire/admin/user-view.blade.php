<head>
    <style>
        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }
        .card-body {
    max-width: 80%;
}

element.style {
}
.back-btn a {
    padding: 8px 30px;
    margin-bottom: 25px;
}
.form-group .row {
    margin-bottom: 21px;
}
.form-group textarea {

    min-height: 150px;
}
        .web-link {
            color: #dd342f;
            text-decoration: none;
            font-weight: 600;
            display: block;
            margin-top: 15px;
            text-align: center;
        }

        body {
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
            border: none !important;
            padding: 40px 0px;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
            padding: 0px 10px;
        }

        /* -------------------------------------
    BODY & CONTAINER
------------------------------------- */

        /* .body {
        width: 100%;
    } */

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container1 {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 750px;
            padding: 10px;
            width: 100%;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
           
            padding: 10px;
        }

        /* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
        .main {
            
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
            border-radius: 10px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        /* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #3498db;
            /* text-decoration: underline; */
        }

        /* -------------------------------------
    BUTTONS
------------------------------------- */
        .btn {
            box-sizing: border-box;
           
        }

        .btn>tbody>tr>td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #3498db;
            border-radius: 5px;
            box-sizing: border-box;
            color: #3498db;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize;
        }

        .btn-primary table td {
            background-color: #3498db;
        }

        .btn-primary a {
            background-color: #3498db;
            border-color: #3498db;
            color: #ffffff;
        }

        /* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .member-img {
            width: 50px;
            height: 50px;
            display: inline-block;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .member-name {
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .member-id {
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            font-size: 14px;
        }

        .member-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ahap-heading {
            color: #fff;
            font-size: 34px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2px;
        }

        .ahap-sub-heading {
            color: #fff;
            text-align: center;
            font-weight: 600;
        }

        .ploice-office {
            color: #fff;
            margin-bottom: 0px;
            margin-top: 10px;
            text-transform: uppercase;
            text-align: center;
            font-weight: 700;
            font-size: 22px;
        }

        .grey-text {
            font-size: 15px;
            color: grey;
            text-align: center;
            margin-bottom: 2px;
            margin-top: 20px;
            font-weight: 500;
        }

        .h4-design {
            color: #fff;
            text-align: center;
            margin-bottom: 10px;
            margin-top: 3px;
            font-weight: 700;
            font-size: 20px;
        }

        /* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            .mpbile-full {
                display: block;
                width: 100%;
                box-sizing: border-box;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container1 {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
    PRESERVE THESE STYLES IN THE HEAD
------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }
    </style>
</head>
<h4>User View</h4>

<div class="form-group ">
   <div class="back-btn"> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-angle-left"></i>Back</a>
   </div>

    <div class="row">
        <div class="col-6">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="f_name">
        </div>
        <div class="col-6">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="l_name">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="phone">
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <label for="exampleInputEmail1">City</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="city">
        </div>
        <div class="col-4">
            <label for="exampleInputEmail1">State</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="state">
        </div>
        <div class="col-4">
            <label for="exampleInputEmail1">Zip Code</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="zip_code">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="exampleInputEmail1">Service</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="service">
        </div>
       
    </div>
    <div class="row">
         <div class="col-12">
            <label for="exampleInputEmail1">Personalization</label>
            <textarea type="text" class="form-control" id="exampleInputEmail1" wire:model="personalization">wire:model="personalization</textarea>
    </div>
        </div
</div>

<div>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
        <tr>
            <td>&nbsp;</td>
            <td class="container1">
                <div class="content">

                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role="presentation" class="main">

                        <!-- START MAIN CONTENT AREA -->
                        <tr>
                            <td class="wrapper" style="background-image: url('https://login.theahap.com/public/img/bg-flag.png');background-size: cover;">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="text-align: center;" class="mpbile-full">
                                            <span class="member-img"><img src="{{ asset('uploads/user/headshot_card/' . @$users->headshot_card) }}"></span>
                                            <p class="member-name">{{ @$users->username }}</p>
                                            <p class="member-id">Member Id# {{ @$users->member_id }}</p>

                                        </td>
                                        <td class="mpbile-full">
                                            <h2 class="ahap-heading">AHAP</h2>
                                            <p class="ahap-sub-heading">AMERICAN HEROES APPRECIATION PROGRAM</p>
                                            <h3 class="ploice-office">{{ @$users->service }}</h3>
                                            <p class="grey-text">Date of Service</p>
                                            @if(@$users->service_from !=null)

                                            <h4 class="h4-design">{{ @$users->service_from }} @if(@$users->service_to )-{{ @$users->service_to }} @endif</h4>

                                            @else
                                            <h4 class="h4-design">{{ @$users->service_status }}</h4>
                                            @endif

                                            <p class="grey-text">{{ @$users->personalization }}</p>
                                            <h4 class="h4-design">{{@$users->city}} {{@$users->state}}</h4>
                                        </td>
                                        <td class="mpbile-full">
                                            <a href="#" class="web-link">www.TheAHAP.com</a>
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
</div>


<script>
    $(document).ready(function() {
        $(".form-control").prop("disabled", true);
    });
</script>