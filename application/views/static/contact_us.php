<p>Contact us at:</p>
<?php
    print form_open('welcome/contact_us');
    
        print form_label('Name','contact[name]');
        print form_input('contact[name]',set_value('contact[name]'));
        print form_error('contact[name]');
        print br();
        
        print form_label('Email','contact[email]');
        print form_input('contact[email]',set_value('contact[email]'));
        print '<em>(we promise we won\'t spam or share your email to third parties)</em>';
        print form_error('contact[email]');
        print br();
        
        print form_label('Message','contact[message]');
        print form_textarea('contact[message]',set_value('contact[message]'));
        print form_error('contact[message]');
        print br();
    
    print form_submit('contact[submit]','Contact');
?>
