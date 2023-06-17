async function updateNewValues()
{
    const response = await fetch('http://localhost:8080/newvalues');
    const jsonData = await response.json();
    console.log(jsonData);
    document.getElementById("new_population").innerHTML = jsonData.new_population;
    document.getElementById("new_youthkids").innerHTML = jsonData.new_youthkids;
    document.getElementById("new_seniors").innerHTML = jsonData.new_seniors;
    document.getElementById("new_household").innerHTML = jsonData.new_household;
}



window.onload = updateNewValues();