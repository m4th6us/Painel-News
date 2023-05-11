
var ini = 0
var nex = 20

function news(ini, nex) {
    console.log(ini, nex)
    const url = 'http://localhost:8088/Painel-News/scripts/api.php';
    const options = {
        method: 'GET',
        headers: {
            'Access-Control-Allow-Origin': '*'
        }
    };

    try {
        fetch(url, options)
            .then(response => {
                return response.json();
            })
            .then(body => {
                dynamicList.textContent = "";
                
                for (let index = ini; index < nex; index++) {
                    var listItem = document.createElement("span");
                    var link = document.createElement("a");
                    link.href = `${body.articles[index].url}`;
                    link.target = "_blank";
                    link.rel = "noopener noreferrer";
                    link.textContent = `${body.articles[index].title}`;
                    listItem.appendChild(link);
                    dynamicList.appendChild(listItem);	
     
                }
            });
    } catch (error) {
        console.error(error);
    }
}

function next(){
    ini = nex;
    nex = ini + 20;
    news(ini, nex);
}
