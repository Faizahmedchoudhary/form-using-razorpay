 console.log("hi Welcome to Js")

// logic
// let buynow = document.getElementById('buynow')
// buynow.addEventListener("click" , buynow);



function myFunction() {

                const buynow = document.getElementById('buynow')
                billsquare_data = ['d4dstudio','kashafperfumes','taxworldd','ars-impex','attyabperfumes', 'honetubes', 'palvekar', 'ishraqtrading','cinegrips', 'risingstar', 'refac', 'anyinfra', 'cscorporatesolutions','mycorporategift', 'fun2learn', 'cscorporategifts', 'demo', 'cubosquare'];

                billsquare_data = billsquare_data.map(function(x){ return x.toUpperCase(); });
                // const bill_data = billsquare_data.toUpperCase();
                specchar = ["!", "@", "#", "$", "^","&" ,"%" ,"*" ,"()" ,"+" ,"=" ,"- " , "[]" , ".", ",",  "{}",  ";",  "/" , "<" , "?", "|"];
                // specchar = ['!' , '@'];
                


                // business folder value
                idata = document.getElementById("busn_folder").value;
                const data = idata.toUpperCase();

                if (specchar.includes(data))
                {
                    const spclchar = document.getElementById("checkout-text").innerHTML = "Sorry Special are not allowed";
                    
                }

                else if(billsquare_data.includes(data))
                {
                    document.getElementById('checkout-text').innerHTML = "sorry this name exists please Try another name"

                    console.log("sorry " + data)

                    document.getElementById("text").style.display = "none";
                    document.getElementById("checkout-text").style.display = "block";  
                } 
                else if (data == '') {
                    document.getElementById('checkout-text').innerHTML = "please enter Business Folder Name";
                }
                else
                {
                    console.log("proceed")
                    document.getElementById("text").innerHTML = "this will be Your Url:   "  +  "   www.bill.square.net.in/" + document.getElementById("busn_folder").value;
                    
                    document.getElementById("checkout-text").style.display = "none";
                    document.getElementById("text").style.display = "block";

                    document.getElementById("buynow").style.visibility = "visible";
                    document.getElementById("checkout_btn").style.visibility = "hidden";


                }
 

            }
    
// }

// const suggest_username = () => {
    

// company_name = document.getElementById("name_folder").value;
// email_name = document.getElementById("email_folder").value;

// suggest_bussname = document.getElementById("sugg_user").innerHTML =  document.getElementById("name_folder").value.substr(0,3) + document.getElementById("email_folder").value.substr(0,3);

// }

// function tt() {
//     var a = "http://localhost/form%20billsquare/payscript.php"
//     window.location.href = a;
// }
// tt()








    
    


