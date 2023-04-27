class IngatlanModel{
    constructor(token)
    {
        this.token=token;
    }

    egyAdat(vegpont, myCallBack)
    {
        console.log(vegpont);
        fetch(vegpont, 
        {
            method: 'GET',
            headers: 
            {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.token,
            }
        })
        .then((response) => response.json())
        .then((data) => 
        {
            console.log(data);
            myCallBack(data)
        })
        .catch((error) => 
        {
            console.error('Error:', error);
        });
    }

    adatUj(vegpont, adat)
    {
        console.log(adat);
        console.log(JSON.stringify(adat));
        fetch(vegpont,
        {
            method: "POST",
            body: JSON.stringify(adat),
            headers:
            {
                "content-type": "application/json",
                "X-CSRF-TOKEN": this.token,
            },
        })
        .then((response)=>response.json())
        .then((data)=>
        {
            console.log("Sikeres adatfelvitel" + data);
        })
        .catch((error)=>
        {
            console.error("Error", error);
        });
    }


    adatTorol(vegpont, adat)
    {
        console.log("töröltem: ");
        console.log(adat);
        console.log(vegpont);
        fetch(vegpont,
        {
            method: "DELETE",
            headers:
            {
                "X-CSRF-TOKEN": this.token,
            },
        })
        .then((response)=>response.json())
        .then(() => 
        {
            console.log("Sikeres törlés");
        })
        .catch((error) => 
        {
            console.error('Error:', error);
        });
    }
}
export default IngatlanModel