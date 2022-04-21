var person = {
    firstName : "John",
    lastName : "Doe",
    age : "20",
    fullname : function() {
        return this.firstName + " " + this.lastName;
    }
};
document.getElementById('object').innerHTML = person.fullname();