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
      color: #fff;
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
            <td>
              <span style="padding: 5px; background-color: white; color: #cf51a4; font-weight: bold;">
                Recieved Message
              </span>
            </td>
            <td style="text-align: right;">
             <span style="padding: 5px; background-color: white; color: #cf51a4; font-weight: bold;">
               {{ date('d-M-Y', strtotime($msg->created_at)) }}
             </span>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td class="innerpadding borderbottom">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          
          <tr>
            <td class="bodycopy">
              <h4 style="margin:0px;">
                You Have a message from an User, 
                <a href="{{ route('single_groom_bride',$user->id) }}" class="btn-success">See User Profile</a>
              </h4>
              
              <h4 style="margin-bottom:0px;">Subject</h4>
              <span>{{ $msg->subject}}</span>

              <h4 style="margin-bottom:0px;">Message</h4>
              <span>{{ $msg->message }}</span>

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
