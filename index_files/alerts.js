(function($) {
    showSwal = function(type) {
        'use strict';
        if (type === 'error') {
            swal({
                title: 'ERROR',
                text: 'Please, Contact Support ASAP | MSG CODE #0',
                icon: 'error',
                timer: 1500,
                button: false
            })

        } else if (type === 'registered') {
            swal({
                title: 'Congratulations!',
                text: 'You can log in Now! | MSG CODE #1',
                icon: 'success',
                timer: 1500,
                button: false
            })

        } else if (type === 'chkpass') {
            swal({
                title: 'Password is incorrect!',
                text: 'Please, Double Check Password | MSG CODE #2',
                icon: 'warning',
                timer: 1500,
                button: false
            })

        } else if (type === 'unotfound') {
            swal({
                title: 'Username is not found!',
                text: 'Please, Double Check Username | MSG CODE #3',
                icon: 'warning',
                timer: 1500,
                button: false
            })

        } else if (type === 'loggedout') {
            swal({
                title: 'Logged Out !',
                text: 'We hope we can see you again | MSG CODE #4',
                icon: 'success',
                timer: 1500,
                button: false
            })

        } else if (type === 'logfirst') {
            swal({
                title: 'You have to log in first!',
                text: 'Kindly Log in first ,Homie .',
                icon: 'warning',
                timer: 1500,
                button: false
            })
			
			
        } else if (type === 'loginerror') {
            swal({
                title: 'Invalid Username and Password!',
                text: 'Kindly Type in Valid Username and Password.',
                icon: 'warning',
                timer: 1500,
                button: false
            })

        } else if (type === 'logged') {
            swal({
                title: 'Welcome!',
                text: 'You are successfully logged in.',
                icon: 'success',
                timer: 1500,
                button: false
            })

        } else if (type === 'alreadylogged') {
            swal({
                title: 'Welcome!',
                text: 'You Already Logged. | MSG CODE #7',
                icon: 'success',
                timer: 1500,
                button: false
            })

        } else if (type === 'icqupdated') {
            swal({
                title: 'Done..!',
                text: 'Done. | MSG CODE #8',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'passchanged') {
            swal({
                title: 'Password Changed..!',
                text: 'Your Account Password Changed  GG. | MSG CODE #9',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'wrongpass') {
            swal({
                title: 'Password is wrong..!',
                text: 'Please, Double Check your current Password. | MSG CODE #10',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'passsame') {
            swal({
                title: 'Password is the same..!',
                text: 'Please, Write Different Password ,Smartass. | MSG CODE #11',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'apiused') {
            swal({
                title: 'API USED BEFORE ,KIDDY..!',
                text: 'This API USED Already ,Kiddiy. | MSG CODE #12',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'apiwrong') {
            swal({
                title: 'Don`t Play Here -_-!',
                text: 'Don’t try ,Dumbass. | MSG CODE #13',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'activated') {
            swal({
                title: 'Gzzzzzzz..',
                text: 'Scam Page Activated . | MSG CODE #14',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'lol') {
            swal({
                title: '_!_',
                text: 'Don`t Play Here Mazafaka. | MSG CODE #15',
                icon: 'error',
                timer: 1500,
                button: false
            })
        } else if (type === 'mingreater') {
            swal({
                title: '_!_',
                text: 'Min Cant Be Greater Than Max ,Smartass. | MSG CODE #16',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'inputadded') {
            swal({
                title: 'GG INPUT ADDED..',
                text: 'You have added a new input to your page successfully . | MSG CODE #17',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'inputdeleted') {
            swal({
                title: 'GG INPUT DELETED..',
                text: 'You have deleted the input successfully . | MSG CODE #18',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'antibotupdated') {
            swal({
                title: 'ANTI BOT UPDATED..',
                text: 'You have UPDATED The Antibot Settings successfully . | MSG CODE #19',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'settingsupdated') {
            swal({
                title: 'SETTINGS UPDATED..',
                text: 'You have UPDATED The Settings of your page successfully . | MSG CODE #20',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'invalidscamurl') {
            swal({
                title: 'Invalid Scam URL',
                text: 'Please, Write Valid Scam LINK ,Kiddy. | MSG CODE #21',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'invalidrefurl') {
            swal({
                title: 'Invalid Referrer URL',
                text: 'Please, Write Valid Referrer LINK ,Kiddy. | MSG CODE #22',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'pagerank') {
            swal({
                title: 'PAGES RANKS UPDATED..',
                text: 'You have UPDATED The Ranks of your pages successfully . | MSG CODE #23',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'settingsudpdated') {
            swal({
                title: 'SETTINGS UPDATED..',
                text: 'You have UPDATED The Settings of your page successfully . | MSG CODE #24',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'sendupdated') {
            swal({
                title: 'Send Results Info UPDATED..',
                text: 'You have UPDATED Send Results of your pages successfully . | MSG CODE #25',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'invalidmailer') {
            swal({
                title: 'Invalid Mailer URL..',
                text: 'Put Valid URL ,Dumbass. | MSG CODE #26',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'invalidemail') {
            swal({
                title: 'Invalid E-Mail Address..',
                text: 'Are you Fxcking kidding me !... You are really did that!! Dayum Yoo. | MSG CODE #27',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'captchaupdated') {
            swal({
                title: 'CAPTCHA PAGE UPDATED..',
                text: 'You have UPDATED The CAPTCHA Settings of your page successfully . | MSG CODE #28',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'loginupdated') {
            swal({
                title: 'LOGIN PAGE UPDATED..',
                text: 'You have UPDATED The LOGIN PAGE Settings of your page successfully . | MSG CODE #29',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'alertupdated') {
            swal({
                title: 'ALERT PAGE UPDATED..',
                text: 'You have UPDATED The ALERT PAGE Settings of your page successfully . | MSG CODE #30',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'billingupdated') {
            swal({
                title: 'BILLING PAGE UPDATED..',
                text: 'You have UPDATED The BILLING PAGE Settings of your page successfully . | MSG CODE #31',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'cardupdated') {
            swal({
                title: 'CARD PAGE UPDATED..',
                text: 'You have UPDATED The CARD PAGE Settings of your page successfully . | MSG CODE #32',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'mailaccessupdated') {
            swal({
                title: 'Mail Access PAGE UPDATED..',
                text: 'You have UPDATED The Mail Access PAGE Settings of your page successfully . | MSG CODE #33',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'thanksupdated') {
            swal({
                title: 'Thanks PAGE UPDATED..',
                text: 'You have UPDATED The Thanks PAGE Settings of your page successfully . | MSG CODE #34',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'monitoradded') {
            swal({
                title: 'GG Monitor EYE Added..',
                text: 'GG Now you can Track Your page easily . | MSG CODE #35',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'monitorupdated') {
            swal({
                title: 'GG Monitor EYE UPDATED..',
                text: 'Scam Page URL Updated . | MSG CODE #36',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'invalidmonitor') {
            swal({
                title: 'INVALID Monitor ..-_-',
                text: 'Dumbass, You Don’t know how to write put your scampage ?. | MSG CODE #37',
                icon: 'error',
                timer: 1500,
                button: false
            })
        } else if (type === 'codedadded') {
            swal({
                title: 'Gzz, Your Balance Topped UP ..',
                text: 'Sheeeesh ,Homie . | MSG CODE #38',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'codeused') {
            swal({
                title: 'Code Used Already Before',
                text: 'This Code Used Already Before ,Mazafaka ?. | MSG CODE #39',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'invalidcode') {
            swal({
                title: 'INVALID BALANCE CODE ..',
                text: 'From Where you got this CODE ,Dumbass ?. | MSG CODE #40',
                icon: 'error',
                timer: 1500,
                button: false
            })
        } else if (type === 'balancenotenough') {
            swal({
                title: 'Insufficient Funds _-_',
                text: 'Your Balance not enough | MSG CODE #41',
                icon: 'error',
                timer: 1500,
                button: false
            })
        } else if (type === 'subscribed') {
            swal({
                title: 'Gzz, You have Subscribed ..',
                text: 'Sheeeesh ,Homie  ... Don’t Forget to save the API-Key Before Close The Page | MSG CODE #42',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'renewed') {
            swal({
                title: 'Renewed Successfully',
                text: 'Sheesh, Keep Going, bruh. Your Page Renewed ? | MSG CODE #43',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'apikeyexpired') {
            swal({
                title: 'API Expired _-_',
                text: 'Please, Renew Your Page to be able to use it  | MSG CODE #44',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'sendersettings') {
            swal({
                title: 'SENDER SETTINGS UPDATED',
                text: 'Nice, Sender Settings Updated  | MSG CODE #45',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'smtpmailerset') {
            swal({
                title: 'SMTPs & Mailers ADDED',
                text: 'Nice, You have added SMTPs & Mailers  | MSG CODE #46',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'smtprequired') {
            swal({
                title: 'SMTP OR Mailer REQUIRED',
                text: 'DumbAss, How the f*ck you want to send to mail without mailer or even SMTP HUH ?fill one of them atleast | MSG CODE #47',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'rzltdeleted') {
            swal({
                title: 'Result Deleted Successfully',
                text: 'We Have Deleted The Result Successfully | MSG CODE #48',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'codeasked') {
            swal({
                title: 'Code Asked Successfully',
                text: 'We Have Asked The Asked The Victim for The Code | MSG CODE #49',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'passwordnotmatched') {
            swal({
                title: 'Please check your password',
                text: 'You have to write same password | MSG CODE #50',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'invalidemail') {
            swal({
                title: 'Please Put Valid Email Address',
                text: 'You have to Valid Email Address | MSG CODE #51',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'usernameoremail') {
            swal({
                title: 'Email OR Username USED',
                text: 'That Username or Email Address Used Before | MSG CODE #52',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'allfieldsrequired') {
            swal({
                title: 'ALL THE FIELDS ARE REQUIRED',
                text: 'Plase Fill up all the fields | MSG CODE #53',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'invalidAPIDownload') {
            swal({
                title: 'Invalid API Serial',
                text: 'Plase Check Your API Serial | MSG CODE #54',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'RemovedSuccess') {
            swal({
                title: 'Your Email List Removed',
                text: 'We Removed Email List You Can Add Again | MSG CODE #55',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'SuccessAddedInfo') {
            swal({
                title: 'Info Were Added in our DataBase',
                text: 'Sending Info Were Saved Successfully | MSG CODE #56',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'SuccessAddedleads') {
            swal({
                title: 'email List Were Added in our DataBase',
                text: 'Emails Were Saved Successfully | MSG CODE #56',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'CHECK_URL') {
            swal({
                title: 'Check Scam Page URL',
                text: 'Please Add SCAM PAGE URL | MSG CODE #57',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'ticketOpened') {
            swal({
                title: 'Ticket Has Been Opened',
                text: 'Ticket Opened Successfully | MSG CODE #58',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'cubesadded') {
            swal({
                title: 'Cubes Added',
                text: 'You have added Cubes Successfully | MSG CODE #59',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'wrongChatId') {
            swal({
                title: 'Wrong Chat id',
                text: 'Wrong Chat ID | MSG CODE #60',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'SuccessAddedPhoneLeads') {
            swal({
                title: 'Phone List Were Added in our DataBase',
                text: 'Phones Were Saved Successfully | MSG CODE #61',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'rdpdone') {
            swal({
                title: 'RDP Bought',
                text: 'You have bought an RDP, Please wait 5 mins before logging | MSG CODE #62',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'tryagainlater') {
            swal({
                title: 'Try Again Later',
                text: 'Sorry Please Try again Later | MSG CODE #63',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'paymentEmpty') {
            swal({
                title: 'Check your input amount',
                text: 'Please Check your inut amount | MSG CODE #64',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'successPayment') {
            swal({
                title: 'Success payment ',
                text: 'Your Balance Top up Now | MSG CODE #65',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'checkCubes') {
            swal({
                title: 'Failed payment ',
                text: 'Check Your Cubes| MSG CODE #66',
                icon: 'warning',
                timer: 1500,
                button: false
            })
        } else if (type === 'RemovedSuccessPhone') {
            swal({
                title: 'Your Phone List Removed',
                text: 'We Removed Phone List You Can Add Again | MSG CODE #67',
                icon: 'success',
                timer: 1500,
                button: false
            })
        } else if (type === 'authcodeinvalid') {
            swal({
                title: 'AUTH CODE IS INVALID or Used Before',
                text: 'PLEASE CLICK HET AUTH CODE| MSG CODE #68',
                icon: 'warning',
                timer: 2500,
                button: false
            })
        } else if (type === 'invalidinvcode') {
            swal({
                title: 'Invitation code is invalid or expired',
                text: 'PLEASE Ask Your friend to give you new  one| MSG CODE #69',
                icon: 'warning',
                timer: 2500,
                button: false
            })
        } else if (type === 'successauth') {
            swal({
                title: 'Successfully You  got AUTH CODE',
                text: 'Please Copy it and go sign up| MSG CODE #70',
                icon: 'success',
                timer: 2500,
                button: false
            })
        } else if (type === 'boughtlog') {
            swal({
                title: 'Log Paid',
                text: 'You Bought Log Successfully| MSG CODE #71',
                icon: 'success',
                timer: 2500,
                button: false
            })
        } else if (type === 'logadded') {
            swal({
                title: 'Log Added',
                text: 'Log is under review right now will be added here soon| MSG CODE #72',
                icon: 'success',
                timer: 2500,
                button: false
            })
        } else if (type === 'interror') {
            swal({
                title: 'Price or Balance Error',
                text: 'Price & Balance Should be numbers| MSG CODE #73',
                icon: 'error',
                timer: 2500,
                button: false
            })
        } else if (type === 'pincode') {
            swal({
                title: 'PIN CODE Wrong',
                text: 'Please Check your PIN CODE| MSG CODE #74',
                icon: 'error',
                timer: 2500,
                button: false
            })
        } else if (type === 'cpanelcreated') {
            swal({
                title: 'Host Created',
                text: 'Created Host Successfully| MSG CODE #75',
                icon: 'success',
                timer: 2500,
                button: false
            })
        } else if (type === 'pinrequired') {
            swal({
                title: 'PIN Requried',
                text: 'Talk with support to create PIN for you | MSG CODE #76',
                icon: 'warning',
                button: true
            }).then(function() {
                window.location = "https://t.me/Strox_to_Support";
            });
        } else if (type === 'takendomain') {
            swal({
                title: 'Domain Name Taken',
                text: 'Please choose another domain name | MSG CODE #77',
                icon: 'warning',
                timer: 2500,
                button: false
            });
        } else if (type === 'successSMS') {
            swal({
                title: 'Gzz Subscribed to SMS Plan',
                text: 'You Can Send SMS Now | MSG CODE #78',
                icon: 'success',
                timer: 2500,
                button: false
            });
        } else if (type === 'pageperiod') {
            swal({
                title: 'There Not FIlled Inputs',
                text: 'Please, Select an Option From Options | MSG CODE #79',
                icon: 'warning',
                timer: 2500,
                button: false
            });
        } else if (type === 'notverified') {
            swal({
                title: 'Your account is not verified',
                text: 'You must top-up funds to your account to verify your account | MSG CODE #80',
                icon: 'warning',
                timer: 3500,
                button: false
            });
        } else if (type === 'notverified') {
            swal({
                title: 'Your account is not verified',
                text: 'You must top-up funds to your account to verify your account | MSG CODE #80',
                icon: 'warning',
                timer: 3500,
                button: false
            });
        }
        // 

    }

})(jQuery);