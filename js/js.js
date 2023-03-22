let calendar = document.querySelector(".calendar");
let date = document.querySelector(".date");
let daysContainer = document.querySelector(".days");
let prev = document.querySelector(".prev");
let next = document.querySelector(".next");

let todayBtn = document.querySelector(".today-btn");
let gotoBtn = document.querySelector(".goto-btn");
let dateInput = document.querySelector(".date-input");
let eventDay=document.querySelector(".event-day");
let eventDate=document.querySelector(".event-date");
let eventsContainer=document.querySelector(".events");
let addEventBtn=document.querySelector(".add-event-btn");


let today= new Date();
let activeDay;
let month = today.getMonth();
let year = today.getFullYear();

let months =[
"January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"December",
];


 //let eventsArr=[
//{
   // day:15,
    //month:03,
    //year:2023,
   // events:[
     //   {
       //     title:"Dogadjaj 1 lorem ispun dolar sit",
         //   time: "14:00h",
        //},
        //{
          //  title:"Dogadjaj 2 ",
            //time: "19:00h",
        //},
    //],
//},
 //];
 let eventsArr=[];
getEvents();

function initCalendar(){
    let firstDay = new Date(year,month,1);
    let lastDay = new Date(year,month +1,0);
    let prevLastDay = new Date(year,month,0);
    let prevDays = prevLastDay.getDate();
    let lastDate = lastDay.getDate();
    let day = firstDay.getDay();
    let nextDays = 7- lastDay.getDay()-1;

    date.innerHTML = months[month] + " " + year; 

    let days ="";

    for(let x=day;x>0;x--){
        days+=`<div class="day prev-date">${prevDays - x + 1}</div>`;
    }
    for(let i=1;i<=lastDate;i++)
    {


        let event = false;
        eventsArr.forEach((eventObj)=> {
            if(eventObj.day===i && eventObj.month === month+1){
                event = true;
            }
        });



        if(i === new Date().getDate() && year === new Date().getFullYear() && month === new Date().getMonth())
        {

            activeDay=i;
            getActiveDay(i);
            updateEvents(i);

            if(event){
            days+=`<div class="day today active event">${i}</div>`;
            }else{
                days+=`<div class="day today active">${i}</div>`;
            }
        }
        else{
            if(event){
            days+=`<div class="day event">${i}</div>`;
            }
            else
            {
                days+=`<div class="day">${i}</div>`;
            }
        }
    }

    for(let j=1;j<=nextDays;j++)
    {
        days+=`<div class="day next-date">${j}</div>`;
    }

    daysContainer.innerHTML= days;
    addListener();

}

initCalendar();


function prevMonth(){
    month--;
    if(month<0){
        month = 11;
        year--;
    }
    initCalendar();
}
function nextMonth(){
    month++;
    if(month>11){
        month = 0;
        year++;
    }
    initCalendar();
}


prev.addEventListener("click",prevMonth);
next.addEventListener("click",nextMonth);

todayBtn.addEventListener("click",()=>{
    today = new Date();
    month = today.getMonth();
    year = today.getFullYear();
    initCalendar();
});

dateInput.addEventListener("input",(e)=>{
    dateInput.value = dateInput.value.replace(/[^0-9/]/g,"");
    if(dateInput.value.length===2){
        dateInput.value+="/";
    }
    if(dateInput.value.length>7){
        dateInput.value = dateInput.value.slice(0,7);
    }

    if(e.inputType === "deleteContentBackward")
    {
        if(dateInput.value.length ===3){
            dateInput.value = dateInput.value.slice(0,2);
        }
    }
});

gotoBtn.addEventListener("click",gotoDate);

function gotoDate(){
    let dateArr= dateInput.value.split("/");

    if(dateArr.length === 2){
        if(dateArr[0]> 0 && dateArr[0] < 13 && dateArr[1].length ===4){
            month = dateArr[0] - 1;
            year = dateArr[1];
            initCalendar();
            return;
        }
    }

    alert("invalid date");
}

let addEvent = document.querySelector(".add-event");
let addEventContainer = document.querySelector(".add-event-wrapper");
let addEventCloseBtn = document.querySelector(".close");
let addEventTitle = document.querySelector(".event-name");
let addEventFrom = document.querySelector(".event-time-from");
let addEventTo = document.querySelector(".event-time-to");





document.addEventListener("click",(e)=>{
    if(e.target != addEvent && !addEventContainer.contains(e.target)){
        addEventContainer.classList.remove("active");
    }
});


function addListener(){
    let days=document.querySelectorAll(".day");
    days.forEach((day)=>{
        day.addEventListener("click",(e)=>{
            activeDay=Number(e.target.innerHTML);
            getActiveDay(e.target.innerHTML);
            updateEvents(Number(e.target.innerHTML));

            days.forEach((day)=>{
                day.classList.remove("active");
               
            });

            if(e.target.classList.contains("prev-date")){
                prevMonth();

                setTimeout(()=>{
                    let days=document.querySelectorAll(".day");

                    days.forEach((day)=>{
                  if(!day.classList.contains("prev-date") && day.innerHTML===e.target.innerHTML)
                  {
                    day.classList.add("active");
                  }

                    });
                } , 100);
            }
            else  if(e.target.classList.contains("next-date")){
                nextMonth();

                setTimeout(()=>{
                    let days=document.querySelectorAll(".day");

                    days.forEach((day)=>{
                  if(!day.classList.contains("next-date")&&
                  day.innerHTML==e.target.innerHTML)
                  {
                    day.classList.add("active");
                  }

                    });
                } , 100);
            }
          
          else{
            e.target.classList.add("active");
          }  

        });
    });
}


function getActiveDay(date){
    let day=new Date(year, month, date);
    let dayName = day.toString().split(" ")[0];
    eventDay;
    eventDay.innerHTML=dayName;
    eventDate.innerHTML=date + " " + months[month]+ " " + year;
}


function updateEvents(date){
    let events= "";
    eventsArr.forEach((event)=>{
        if(date===event.day && month + 1===event.month && year===event.year)
        {
            event.events.forEach((event)=>{
                events+=`
                <div class="event">
                <div class="title">
                <i class="fa fa-circle"></i>
                <h3 class="event-title">${event.title}</h3>
                </div>
                <div class="event-time">
                <span class="event-time">${event.time}</span>
                </div>
                </div>
                `;

            });
        }
    });

    if(events == ""){
        events=`
        <div class="no-event">
        <h3>No Events</h3>
        </div>
        `;
    }
    eventsContainer.innerHTML=events;
    saveEvents();
}


function convertTime(time){
    let timeArr=time.split(":");
    let timeHour=timeArr[0];
    let timeMin=timeArr[1];
    let timeFormat=timeHour>12? "PM" : "AM";
    timeHour=timeHour % 12 || 12;
    time=timeHour + ":" +  timeMin + " " + timeFormat;
    return time;

}

eventsContainer.addEventListener("click",(e) => {
    if(e.target.classList.contains("event")){
        let eventTitle=e.target.children[0].children[1].innerHTML;
        eventsArr.forEach((event) => {
            if(event.day == activeDay && event.month == month + 1 && event.year== year){
                event.events.forEach((item, index) => {
                    if(item.title == eventTitle){
                        event.events.splice(index, 1);
                    }
                });

                if(event.events.length==0){
                    eventsArr.splice(eventsArr.indexOf(event),1);

                    let activeDayElem=document.querySelector(".day.active");
                    if(activeDayElem.classList.contains("events")){
                        activeDayElem.classList.remove("event");
                    }
                }
            }
        });

        updateEvents(activeDay);
    }
});

function saveEvents(){
     localStorage.setItem("events",JSON.stringify(eventsArr));
}
function getEvents(){
    if(localStorage.getItem("events" == null)){
        return;
    }
   

}

