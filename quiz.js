
let questions = [
  {
    id: 1,
    question: "What is the Full Form Of TCP/IP?",
    answer: "Transmission Control Protocol/Internet Protocol",
    options: [
      "Transfer Control Protocol/Internet Protocol",
      "Transport Control Protocol/Internet Provider",
      "Transmission Control Protocol/Internet Protocol",
      "None of these"
    ]
  },
  {
    id: 2,
    question: "What is the Full-Form of OSI?",
    answer: "Open System Interconnection",
    options: [
      "Open Source Internet",
      "Open System Interconnection",
      "Operating System Interface",
      "None of these"
    ]
  },
  {
    id: 3,
    question: "What is the Full-Form of E-mail",
    answer: "Electronic Mail",
    options: [
      "Electronic Mail",
      "Electric Mail",
      "Engine Mail",
      "None of these"
    ]
  },
  {
    id: 4,
    question: "'PCB' in operating system means?",
    answer: "Process Control Block",
    options: [
      "Process Control Block",
      "Permission Control Block",
      "Programming Chip Board",
      "None of these"
    ]
  },
  {
    id: 5,
    question: "RAM is",
    answer: "All of the above",
    options: [
      "Random Access Memory",
      "Volatile",
      "Faster",
      "All of the above"
    ]
  },
  {
    id: 6,
    question: "How many bits is a byte?",
    answer: "8",
    options: [
      "32",
      "16",
      "8",
      "64"
    ]
  },
  {
    id: 7,
    question: "A JPG stands for:",
    answer: "A format for an image file",
    options: [
      "A format for an image file",
      "A Jumper Programmed Graphic",
      "A type of hard disk",
      "A unit of measure for memory"
    ]
  },
  {
    id: 8,
    question: "Which was an early mainframe computer?",
    answer: "ENIAC",
    options: [
      "ENIAC",
      "EDVAC",
      "UNIC",
      "ABACUS"
    ]
  },
  {
    id: 9,
    question: "Main circuit board in a computer is:",
    answer: "Mother board",
    options: [
      "Harddisk",
      "Mother board",
      "Microprocessor",
      "None of these"
    ]
  },
  {
    id: 10,
    question: "ISP stands for:",
    answer: "Internet Service Provider",
    options: [
      "Internet Survey Period",
      "Integreted Service Provider",
      "Internet Security Protocol",
      "Internet Service Provider"

    ]
  },
];

let question_count = 0;
let points = 0;


window.onload = function () {
  show(question_count);
};

function show(count) {
  let question = document.getElementById("questions");
  let [first, second, third, fourth] = questions[count].options;

  question.innerHTML = `<h2>Q${count + 1}. ${questions[count].question}</h2>
    <ul class="option_group">
    <li class="option">${first}</li>
    <li class="option">${second}</li>
    <li class="option">${third}</li>
    <li class="option">${fourth}</li>
    </ul>`;
  toggleActive();
}

function toggleActive() {
  let option = document.querySelectorAll("li.option");
  for (let i = 0; i < option.length; i++) {
    option[i].onclick = function () {
      for (let i = 0; i < option.length; i++) {
        if (option[i].classList.contains("active")) {
          option[i].classList.remove("active");
        }
      }
      option[i].classList.add("active");
    }
  }
}

function next() {

  if (question_count == questions.length - 1) {
    location.href = "final.html";
  }
  console.log(question_count);


  let user_answer = document.querySelector("li.option.active").innerHTML;

  if (user_answer == questions[question_count].answer) {
    points += 10;
    sessionStorage.setItem("points", points);
  }
  console.log(points);

  question_count++;
  show(question_count);
}