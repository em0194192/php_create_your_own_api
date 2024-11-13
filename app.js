//Script uses axios for api call, creates list from response, and appends to "cars" div

axios
    .get("https://ozarktechwebdev.com/ericapi/newapi.php")
    .then(function (response) {
        console.log("Response Data:", response.data);
        const cars = response.data; //saves the response data to cars variable
        console.log(cars); //output to console for debug/verification
        let carList = document.createElement("li"); //create an element of type UL
        cars.forEach((car) => {
            let carListItem = document.createElement("li"); //creates an li
            carListItem.textContent = `${car.carMake} ${car.carModel}`; //add make and model to li
            carList.appendChild(carListItem); //add li to UL
        });
        document.getElementById("cars").appendChild(carList); //add UL to div with cars ID
    })
    .catch(function (error) {
        console.log(error); //console log error if occurs
    });