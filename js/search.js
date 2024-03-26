let links = [
    {
        "name":"Exam Fee",
        "link":"https://rvrjcce.ac.in/examfee/examfee.php",
        "keys":["fees","payment"]
    },
    {
        "name":"Tution Fee",
        "link":"https://rvrjcce.ac.in/tuitionfee/tuitionfee.php",
        "keys":["fees","payment","tution"]
    },
    {
        "name":"Bus fee",
        "link":"https://rvrjcce.ac.in/busfee/busfee.php",
        "keys":["fees","payment","bus"]
    },
    {
        "name":"Results",
        "link":"https://rvrjcce.ac.in/examcell/results/regnoresultsR.php",
        "keys":["results","exams"]
    },
    {
        "name":"Moodle",
        "link":"http://courses.rvrjc.ac.in/moodle/",
        "keys":["moodle","web service"]
    },
    {
        "name":"Placements",
        "link":"https://rvrjcce.ac.in/placement_statistics.php?menu=plcmnt",
        "keys":["placements","hirings","jobs"]
    },
]

let searchBtn = document.querySelector(".searchButton");
let linksContainer = document.querySelector(".search-links");
let searchBox = document.querySelector(".searchTerm");
let search = document.querySelector(".search");
let closebtn = document.querySelector(".close-btn");

function Websearch(){
    search.style.display="flex";
    search.style.transform="scale(1)";
    document.getElementById("wholeweb").style.display="none";
}

searchBtn.addEventListener("click",function(){
    linksContainer.innerHTML="";
    let linktext = searchBox.value
    console.log(linktext)
    for(let i=0;i<links.length;i++){
        for(let j=0;j<links[i].keys.length;j++){
            if(links[i].keys[j].includes(linktext)){
                linksContainer.innerHTML+=`<a data-aos="fade-down"
                data-aos-duration="${800+(i*200)}" class="search-link" href="${links[i].link}">${links[i].name} <i class="uil uil-external-link-alt"></i></a>`;
                break;
            }
        }
    }
    //  
})

closebtn.addEventListener("click",function(){
    search.style.display="none";
    search.style.transform="scale(0)";
    document.getElementById("wholeweb").style.display="block";
})