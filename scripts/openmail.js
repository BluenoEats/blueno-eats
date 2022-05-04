function openMail() {
    var emailTo = 'bluenoeats@gmail.com';
    var emailSub = 'Message from ' + document.getElementById('contact-name').value;
    var emailBody = document.getElementById('contact-message').value;
    var emailCC = '';
    window.open('mailto:' + emailTo + '?cc=' + emailCC + '&subject=' + emailSub + '&body=' + emailBody, '_self');
}