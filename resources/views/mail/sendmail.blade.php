<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Recieved Message</title>
  <style type="text/css">
        body {
          margin: 0; padding: 0; min-width: 100%!important;
        }
        .content {
          width: 100%; max-width: 600px;
          border: 2px solid #d9e6ce;
        }
        .header {
          padding: 15px 30px 20px 30px;
        }
        .innerpadding {
          padding: 30px 30px 30px 30px;
        }
        .borderbottom {
          border-bottom: 1px solid #9a7b7b;
        }
        .h1, .h2, .bodycopy {
          color: #153643; font-family: sans-serif;
        }
        .h1 {
          font-size: 33px; line-height: 38px; font-weight: bold;
        }
        .h2 {
          padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;
        }
        .button {
          background-color: #4CAF50;
          color: white;
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          cursor: pointer;
        }
        .bodycopy {
          font-size: 16px; line-height: 22px;
        }
        .footer {
          padding: 20px 30px 15px 30px;
        }
        .footercopy {
          font-family: sans-serif; font-size: 14px; color: #ffffff;
        }
        .footercopy a {
          color: #ffffff; text-decoration: underline;
        }
        @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
          body[yahoo] .hide {display: none!important;}
          body[yahoo] .buttonwrapper {background-color: transparent!important;}
          body[yahoo] .button {padding: 0px!important;}
          body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
          body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;
          }
        }
        /*@media only screen and (min-device-width: 601px) {
          .content {width: 600px !important;}
          .col425 {width: 425px!important;}
          .col380 {width: 380px!important;}
        }*/
        .btn-success{
          background-color: #65844af2;
          text-decoration: none;
          padding: 5px;
          color: #fff !important;
          border-radius: 4px;
          border: 1px solid #6d8a53;
          text-align: center;
          font-size: 14px;
        }
  </style>
</head>

<body>
  <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
      <td bgcolor="#e1f6ce" class="header">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="h2" style="padding:0px; color: #cf51a4; text-align: center;">
             Marriage Gate
            </td>
          </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="text-align: center;">
              <span style="padding: _5px; _background-color: white; color: #cf51a4; font-weight: bold;">
                Invitation from Marriage Gate
              </span>
            </td>
            <!-- <td style="text-align: right;">
             <span style="padding: 5px; background-color: white; color: #cf51a4; font-weight: bold;">
               {{ date('d-M-Y', strtotime($msg->created_at)) }}
             </span>
            </td> -->
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td class="innerpadding borderbottom">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          
          <tr>
            <td class="bodycopy">

              <h4 style="margin-bottom:7px;">Dear Dr. {{$full_name}},</h4>
              <span>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </span>

              <h4 style="margin-bottom: 5px;">Thank you, <br>
                Marriage Gate
              </h4>
            </td>
          </tr>

        </table>
      </td>
    </tr>
    <tr>
      <td class="innerpadding bodycopy" style="color: #ab5701;">
        For Any Queries, Please mail to <a href="mailto:contact@marriagegate.com"><b>contact@marriagegate.com</b></a> </td>
    </tr>
    <tr>
      <td class="footer" bgcolor="#e1f6ce">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" class="footercopy" style="color: #cf51a4">
              Marriage Gate © <script type="text/JavaScript"> document.write(new Date().getFullYear()); </script> All rights reserved<br/>
              <a href="#" class="unsubscribe"><font color="#cf51a4">Unsubscribe</font></a> 
              <span class="hide">If don't like these emails</span>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>









<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="format-detection" content="date=no" />
<meta name="format-detection" content="address=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="x-apple-disable-message-reformatting" />
<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i" rel="stylesheet" />
<title>Email Template</title>
<style type="text/css" media="screen">
body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none }
a { color:#66c7ff; text-decoration:none }
p { padding:0 !important; margin:0 !important }
img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
.mcnPreviewText { display: none !important; }

/* Mobile styles */
@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
.mobile-shell { width: 100% !important; min-width: 100% !important; }
.bg { background-size: 100% auto !important; -webkit-background-size: 100% auto !important; }

.text-header,
.m-center { text-align: center !important; }

.center { margin: 0 auto !important; }
.container { padding: 20px 10px !important }

.td { width: 100% !important; min-width: 100% !important; }

.m-br-15 { height: 15px !important; }
.p30-15 { padding: 30px 15px !important; }
.p40 { padding: 20px !important; }

.m-td,
.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

.m-block { display: block !important; }

.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

.column,
.column-top,
.column-empty,
.column-empty2,
.column-dir-top { float: left !important; width: 100% !important; display: block !important; }
.column-empty { padding-bottom: 10px !important; }
.column-empty2 { padding-bottom: 20px !important; }
.content-spacing { width: 15px !important; }
}
</style>
</head>
<body class="body" style="padding:10px !important; margin:0 auto !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4">
<tr>
<td align="center" valign="top">
<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell" bgcolor="#ffffff">
<tr>
<td class="td container" style="width:650px; min-width:650px; line-height:0pt; margin:0; font-weight:normal; _padding:55px 0px;">
    <!-- Header -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
            <td style="_padding-bottom: 20px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="p30-15" style="padding: 25px 30px 25px 30px; background-color: #e6e6e6; border-radius: 5px 5px 0px 0px; height: 60px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <th class="column-top" style="line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="text-header" style="color:#000; text-transform:uppercase;">
                                                    <span style="color:#002e73; font-family:'Noto Sans', Arial,sans-serif; font-weight: bold; font-size:17px;">Marriage Gate</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </th>
                                    
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    
    </table>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="p30-15" style="padding: 25px 30px 25px 30px;" bgcolor="#ffffff">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <th class="column-empty" width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th>
                                    <th class="column" width="170" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="text-header" style="color:#999999; font-family:'Noto Sans', Arial,sans-serif; font-size:12px; line-height:16px; text-align:right;">
                                                </td>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="_padding-bottom: 20px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                    <tr>
                        <td class="p0-15" style="padding: 0px 30px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="h4 pb20" style="color:#114490; font-family:'Noto Sans', Arial,sans-serif; font-size:18px; line-height:32px; text-align:left; padding-bottom:5px;">
                                        Dear Dr. {{$full_name}},
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text pb20" style="color:#777777; font-family:'Noto Sans', Arial,sans-serif; font-size:14px; line-height:26px; text-align:left; padding-bottom:20px;">
                                        <p>{!! $body !!}</p>
                                        <h4 style="margin-bottom: 0px;">Thank you,</h4>
                                        <p>Admin Board</p>
                                        <p>Marriage Gate</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text pb20" style="font-family:'Noto Sans', Arial,sans-serif; font-size:14px; line-height:26px; text-align:justify; padding: 10px 20px;color: #423d3d; border: 1px solid #002e73;">
                                        <span>N.B: </span>
                                        For Any Queries, Please mail to contact@marriagegate.com
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top: 20px;" bgcolor="#ffffff">
                            <tr>
                                <td align="center" class="footercopy" style="color: #cf51a4">
              Marriage Gate © <script type="text/JavaScript"> document.write(new Date().getFullYear()); </script> All rights reserved<br/>
              <a href="#" class="unsubscribe"><font color="#cf51a4">Unsubscribe</font></a> 
              <span class="hide">If don't like these emails</span>
            </td>
                            </tr>
                        </table>
    <!-- END Footer -->
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
