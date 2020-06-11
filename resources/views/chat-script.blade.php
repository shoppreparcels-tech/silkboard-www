<!--Start of Tawk.to Script-->
{{--<script type="text/javascript">--}}
    {{--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();--}}
    {{--(function(){--}}
        {{--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];--}}
        {{--s1.async=true;--}}
        {{--s1.src='https://embed.tawk.to/58dab24ff97dd14875f5a8a9/default';--}}
        {{--s1.charset='UTF-8';--}}
        {{--s1.setAttribute('crossorigin','*');--}}
        {{--s0.parentNode.insertBefore(s1,s0);--}}
    {{--})();--}}
    {{--if (localStorage.userinfo) {--}}
        {{--user = JSON.parse(localStorage.userinfo);--}}
        {{--Tawk_API.visitor = {--}}
            {{--name: user.name,--}}
            {{--email: user.email--}}
        {{--};--}}
    }
{{--</script>--}}

<!--End of Tawk.to Script-->

{{--<!-- End of shoppre-international-shipping-courier Zendesk Widget script -->--}}

<!--Start of Fresh Chat Script-->

<script src="https://snippets.freshchat.com/js/fc-pre-chat-form-v2.js"></script>
  <script>
    var preChatTemplate = {
      //Form header color and Submit button color.
      mainbgColor: '#0aa4db',
      //Form Header Text and Submit button text color.
      maintxColor: '#fff',
      //Chat Form Title
      heading: 'ShoppRe Real-Time',
      //Chat form Welcome Message
      textBanner: 'Please fill out the form below to start chatting live with ShoppRe agent(24*7)',
      //Submit Button Label.
      SubmitLabel: 'Start Chat',
      //Fields List - Maximum is 5
      //All the values are mandatory and the script will not work if not available.
      fields : {
        field1 : {
          type: "name",
          label: "Name",
          fieldId: "name",
          required: "yes",
          error: "Please Enter a valid name"
        },
        field2 : {
          type: "email",
          label: "Email",
          fieldId: "email",
          required: "yes",
          error: "Please Enter a valid Email"
        },
        field3 : {
          type: "phone",
          label: "Phone",
          fieldId: "phone",
          required: "yes",
          error: "Please Enter a valid Phone Number"
        }
      }
    };
    window.fcSettings = {
      token: "612350e1-f23b-4e43-84f9-4b01321a8e0e",
      host: "https://wchat.in.freshchat.com",
      config: {
        cssNames: {
          //The below element is mandatory. Please add any custom class or leave the default.
          widget: 'custom_fc_frame',
          //The below element is mandatory. Please add any custom class or leave the default.
          expanded: 'custom_fc_expanded'
        }
      },
      onInit: function() {
        console.log('widget init');
        fcPreChatform.fcWidgetInit(preChatTemplate);
      }
    };
  </script>
  <script src="https://wchat.freshchat.com/js/widget.js" async></script>

<!--End of Fresh Chat Script-->

<button onclick="window.fcWidget.open();window.fcWidget.show();">Chat with us</button>


<!-- Chat Widget -->
