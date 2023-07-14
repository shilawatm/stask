<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration Form</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/select2/css/select2.min.css">


</head>

<body>

    <div style="margin:0;padding:0;min-width:100%;background-color:#ffffff;font-size:16px">
        <div style="padding:0px 0 0px 0">
            <div style="width:100%;">
                <div style="padding:0px 0 0px 0">
                    <div class="w600" style="margin:0 auto;padding:0px; ">
                        <div class="p-0" style="padding:0;max-width: 600px;margin: 0 auto;">
                            <table
                                style="border-spacing:0;outline: 0px; background:#f6f6f6; border-top: 7px solid #2e94de; border-left: 1px solid #33333340; border-right: 1px solid #33333340; border-bottom: 7px solid #465faf;"
                                width="100%" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div style="position: relative;">
                                                <div class="topbar">
                                                    <div>
                                                        <img layout="responsive" alt="..." width="600" height="305"
                                                            src="./assets/images/bg.jpg" style="outline:none;"></img>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cont-bg" id="tbl_s" style="display: none;">
                                                <div id="tbl_data"></div>
                                            </div>
                                            <div class="cont-bg" id="reg_form">

                                                <form id="firstform" class="frm_product" enctype="multipart/form-data">

                                                    <div>
                                                        <h1 class="title">Complete your registration Now</h1>
                                                    </div>
                                                    <div class="form-bg">
                                                        <div class="form-group">
                                                            <label for="fname">First Name <span
                                                                    class="required">*</span></label>
                                                            <input type="text" class="form-control"
                                                                placeholder="First Name" name="fname" id="txt_fname"
                                                                style="text-transform: capitalize;">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="lname">Last Name <span
                                                                    class="required">*</span></label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Last Name" name="lname" id="txt_lname"
                                                                style="text-transform: capitalize;">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="number">Mobile Number <span
                                                                    class="required">*</span></label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Mobile Number" name="mobile_no"
                                                                id="txt_mno" pattern="[0-9]{10}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email <span
                                                                    class="required">*</span></label>
                                                            <input type="email" class="form-control" placeholder="Email"
                                                                name="email" id="txt_email">
                                                        </div>

                                                        <!-- <div class="form-group">
                                                                    <label for="hobbies">Hobbies <span class="required">*</span></label>
                                                                    
                                                                    <select name="hobbies[]" id="txt_hobbies" class="form-control select2" multiple="multiple" data-placeholder="Select a Hobbies" style="width: 100%;">
                                                                        <option value="">Select</option>
                                                                    @foreach($hobbies as $k=>$hb)
                                                                        <option value="{{$hb}}" >{{$hb}}</option>
                                                                        @endforeach  
                                                                        
                                                                    </select>
                                                                </div> -->

                                                        <div class="form-group">
                                                            <label for="city">Gender</label>
                                                            <span>Male</span> <input type="radio" name="gender"
                                                                value="Male" checked>
                                                            <span>Female</span> <input type="radio" name="gender"
                                                                value="Female">
                                                            <span>Other</span> <input type="radio" name="gender"
                                                                value="Other">
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="country">Country <span
                                                                    class="required">*</span></label>
                                                            <select name="country" id="txt_country" class="form-control"
                                                                onchange="return get_city();">
                                                                <option value="">Select Country</option>
                                                                <option value="india">India</option>
                                                                <option value="UA">UA</option>
                                                                <!-- @foreach($states as $id => $country)
                                                                        <option value="{{ $id }}" >{{ $country}}</option>
                                                                    @endforeach    -->
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="state">State <span
                                                                    class="required">*</span></label>
                                                            <select name="state" id="txt_state" class="form-control"
                                                                onchange="return get_city();">
                                                                <option value="">Select State</option>
                                                                <option value="MH">Maharastra</option>
                                                                <option value="Ga">Goa</option>
                                                                <!-- @foreach($states as $id => $country)
                                                                        <option value="{{ $id }}" >{{ $country}}</option>
                                                                    @endforeach    -->
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="city">City <span
                                                                    class="required">*</span></label>
                                                            <select name="city" id="txt_city" class="form-control">
                                                                <option value="">Select City</option>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="name">Images <span
                                                                    class="required">*</span></label>
                                                            <input type="file" id="file_upload" class="form-control"
                                                                name="img">
                                                        </div>
                                                        <div style="text-align: center;">
                                                            <input type="submit" class="submit-btn" value="Submit">
                                                        </div>

                                                    </div>

                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="./assets/js/jquerymin.js"></script>
    <script type="text/javascript" src="./assets/js/jquery_validate_min.js"></script>
    <!-- <script type="text/javascript" src="./assets/js/additional_methods.js"></script> -->
    <script type="text/javascript" src="./assets/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="./assets/js/style.js"></script>
</body>

</html>