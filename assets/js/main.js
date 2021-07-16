// side bar menu active hover
const menuItem = document.querySelectorAll(".menu-item");
for (let i = 0; i < menuItem.length; i++) {
    menuItem[i].addEventListener('click',function (){
        let currentItem = document.getElementsByClassName('active');
        if (currentItem.length>0){
            currentItem[0].className = currentItem[0].className.replace(' active','');
        }
        this.className += ' active';
    })
}
// counter up
$('.counter').counterUp({
    delay: 10,
    time: 1000
});

//chart js
const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
];
const data = {
    labels: labels,
    datasets: [{
        label: 'Monthly viewers',
        backgroundColor: '#2a3042',
        borderColor: '#226089',
        data: [0, 10, 5, 2, 20, 30, 45],
    }]
};
const config = {
    type: 'line',
    data,
    options: {}
};

var myChart = new Chart(
document.getElementById('myChart'),
config
);

