let person1 = {
    name: "Hung",
    age: 36,
    sayHello: function () {
        console.log("Hello my name is: " + this.name, "Age: " + this.age);
    }
}

let person2 = {
    name: "Tuan",
    age: 27,
    sayHello: function () {
        console.log("Hello my name is: " + this.name, "Age: " + this.age);
    }
}

person1.sayHello();
person2.sayHello();