


function initiateCountdown(){
const $days = document.getElementById('days')
const $hours = document.getElementById('hours')
const $minutes = document.getElementById('minutes')
const $seconds = document.getElementById('seconds')

// Get date of launching
const countDownDate = new Date("Dec 25, 2020 00:00:00").getTime();


let x = setInterval(function(){

//Get current date and time
const now = new Date().getTime()

const difference = countDownDate - now 

//Time calculations for days hours, minutes and seconds
let days = Math.floor(difference / (1000 * 60 * 60 * 24))
let hours = Math.floor((difference % (1000* 60* 60* 24)) / (1000 * 60 * 60 ))
let minutes = Math.floor((difference % (1000 * 60 * 60))/ (1000 * 60))
let seconds = Math.floor((difference % (1000 * 60)) / 1000)

$days.textContent = days
$hours.textContent = hours
$minutes.textContent = minutes
$seconds.textContent = seconds

 if (difference < 0){
    $days.textContent = 0
    $hours.textContent = 0
    $minutes.textContent = 0
    $seconds.textContent = 0
    clearInterval(x)
 }
},1000)



console.log(now)

console.log(countDownDate)
}


initiateCountdown ()