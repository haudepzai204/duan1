const productA = {
    name: "Iphone 12",
}
 const productB = { ...productA};

 productB.price = 200;
 console.log ("productA", productA);
 console.log ("productB", productB);