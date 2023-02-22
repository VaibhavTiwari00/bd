function validate_name(name) {
    if (name != "") {
        let test_string = /^[A-Za-z\s]+$/ //returns true if matched, vaidates for a-z and A-Z and white space
        if (test_string.test(name)) {
            return false;
        } else {
            return "Please enter a valid name with Characters and spaces"
        }

    } else {
        return "Please enter your name";
    }
}


function validate_mail(mail) {
    if (mail != "") {

        let test_string = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; //returns true if matched, vaidates for a-z and A-Z and white space
        if (test_string.test(mail)) {
            return false;
        } else {
            return "Please enter a valid email"
        }

    } else {
        return "Please enter your email";
    }
}


function validate_mobile(mobile) {
    if (mobile != "") {
        let test_string = /^(9|8|7|6)[0-9]+$/; //returns true if mobile number start with 
        if (mobile.length == 10 && test_string.test(mobile)) {
            return false;
        } else {
            return "Please enter a valid 10 disit mobile number"
        }

    } else {
        return "Please enter your mobile number";
    }
}