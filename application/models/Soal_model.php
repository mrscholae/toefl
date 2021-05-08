<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_model extends CI_Model {

    public function get_soal_listeningv1(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <center>SECTION 1‎</center><br>
                    <center>LISTENING COMPREHENSION</center><br>
                    <center>Time: Approximately 30 minutes 50 questions</center>
                    <center>PART A</center> <br>
                    <p>In Part A, you will hear short conversations between two speakers. After each conversation, you will hear a ‎question about the conversation. The conversations and the questions will not be repeated. After you hear a ‎question, read the four posible answers in your test book and choose the best answer. Then, on your answer ‎sheet, find the number of the question and fill in the space that corresponds to the letter of the answer you ‎have choosen.‎</p>",
                // "urut" => "1"
            ],
            [
                "tipe" => "audio",
                "data" => "v1 1-5.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "",
                    "pilihan" => [
                        "They were in the regular room.‎",
                        "The key was missplaced.‎",
                        "He's taking a different class.‎",
                        "He has the key to the classroom.‎",
                    ],
                    "jawaban" => "The key was missplaced.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "",
                    "pilihan" => [
                        "She will lend it to the man.‎",
                        "She never lent the book to Jim.‎",
                        "Jim wants to borrow the book.‎",
                        "Jim has the book.‎",
                    ],
                    "jawaban" => "Jim has the book.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "",
                    "pilihan" => [
                        "Paying bills.‎",
                        "Talking to the landlord.‎",
                        "Turning the light officially.‎",
                        "Looking for an apartment.‎",
                    ],
                    "jawaban" => "Paying bills.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "",
                    "pilihan" => [
                        "She has no time to go to class.‎",
                        "They are already late for class.‎",
                        "It is too early to go to class.‎",
                        "She has to be on time for class.‎",
                    ],
                    "jawaban" => "It is too early to go to class.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "",
                    "pilihan" => [
                        "He is resuming his duties one more time.‎",
                        "He is assuming the class is difficult.‎",
                        "The class it terrible all the time.‎",
                        "The class takes alot of time.‎",
                    ],
                    "jawaban" => "The class takes alot of time.‎",
                ],
            ],
            [
                "tipe" => "audio",
                "data" => "v1 6-10.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "",
                    "pilihan" => [
                        "She need a new coat.‎",
                        "She likes the paint in the dorm rooms.‎",
                        "She has the same opinion as the man.‎",
                        "She left her coat in the dorm room.‎",
                    ],
                    "jawaban" => "She has the same opinion as the man.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "",
                    "pilihan" => [
                        "He needs to complete the math assignment ‎first.‎",
                        "He'll be ready in a couple of hours.‎",
                        "He is going to history class now.‎",
                        "He was ready a few minutes ago.‎",
                    ],
                    "jawaban" => "He needs to complete the math assignment ‎first.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "",
                    "pilihan" => [
                        "She's sorry she moved them.‎",
                        "She really know where they are.‎",
                        "They haven't been moved.‎",
                        "Someone else moved them.‎",
                    ],
                    "jawaban" => "Someone else moved them.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "",
                    "pilihan" => [
                        "A solution is not apparent.‎",
                        "The problem can be fixed.‎",
                        "There is realy a pair problems.‎",
                        "The problem is difficult to solve.‎",
                    ],
                    "jawaban" => "The problem can be fixed.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "",
                    "pilihan" => [
                        "The professor gives quizzes regularly.‎",
                        "The woman is really quite prepared.‎",
                        "It is unusual for this professor to give ‎quizzes.‎",
                        "He doesn't think there's a class today.",
                    ],
                    "jawaban" => "It is unusual for this professor to give ‎quizzes.‎",
                ],
            ],
            [
                "tipe" => "audio",
                "data" => "v1 11-15.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "",
                    "pilihan" => [
                        "She could not comprehend the chemistry ‎lecture.‎",
                        "She has not had time to look of the ‎assignment.‎",
                        "It was possible for her to complete the ‎problem.‎",
                        "She could not understand the problem.‎",
                    ],
                    "jawaban" => "She could not understand the problem.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "",
                    "pilihan" => [
                        "He doesn't know how far away the exibit is.‎",
                        "He's uncertain about the fee.‎",
                        "The exibit is not very far away.‎",
                        "He's sure the exibit is not free.‎",
                    ],
                    "jawaban" => "He's uncertain about the fee.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "",
                    "pilihan" => [
                        "Not taking it at all.‎",
                        "Taking it along with chemistry.‎",
                        "Taking it later.‎",
                        "Taking it instead of chemistry.‎",
                    ],
                    "jawaban" => "Taking it later.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "",
                    "pilihan" => [
                        "An astronomer.‎",
                        "A physician.‎",
                        "A philosopher.‎",
                        "An engineer.‎",
                    ],
                    "jawaban" => "An astronomer.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "",
                    "pilihan" => [
                        "Nothing could surprise her.‎",
                        "The gift really astonished her.‎",
                        "She couldn't have gotten more gifts.‎",
                        "She was expecting the gift.‎",
                    ],
                    "jawaban" => "The gift really astonished her.‎",
                ],
            ],
            [
                "tipe" => "audio",
                "data" => "v1 16-20.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "",
                    "pilihan" => [
                        "She's wearing a new dress.‎",
                        "She's ready to study for hours.‎",
                        "She's exhausted.‎",
                        "She has studied about the war for hour.‎",
                    ],
                    "jawaban" => "She's exhausted.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "",
                    "pilihan" => [
                        "He's relly tall.‎",
                        "He's the best.‎",
                        "He's got a good head on his shoulder.‎",
                        "He always uses his head.‎",
                    ],
                    "jawaban" => "He's the best.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "",
                    "pilihan" => [
                        "He's already talked to the professor about ‎the assignment.‎",
                        "There is no assignment for tomorrow.‎",
                        "He's not sure what the professor will talk ‎about.‎",
                        "The professor discussed the assignment only ‎briefly.‎",
                    ],
                    "jawaban" => "The professor discussed the assignment only ‎briefly.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "",
                    "pilihan" => [
                        "He went to it.‎",
                        "He knew about it.‎",
                        "He didn't know about it.‎",
                        "He gave it.‎",
                    ],
                    "jawaban" => "He didn't know about it.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20.,
                    "soal" => "",
                    "pilihan" => [
                        "It's hard to lock the room.‎",
                        "The cloak was delivered on time.‎",
                        "Someone struck the crockery and broke it.‎",
                        "It is now midday.‎",
                    ],
                    "jawaban" => "It is now midday.‎",
                ],
            ],
            [
                "tipe" => "audio",
                "data" => "v1 21-25.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "",
                    "pilihan" => [
                        "That she wouldn't take the trip.‎",
                        "That she would go to the beach.‎",
                        "That she really liked the beach.‎",
                        "That she would take a break from her ‎studies.‎",
                    ],
                    "jawaban" => "That she wouldn't take the trip.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "",
                    "pilihan" => [
                        "They were disappointed.‎",
                        "They didn't get any gifts.‎",
                        "They were unexcited.‎",
                        "They were really pleased.‎",
                    ],
                    "jawaban" => "They were really pleased.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "",
                    "pilihan" => [
                        "She believes she can succeed.‎",
                        "She's decided to pull out of it.‎",
                        "She wants to put off the speech for a while.‎",
                        "She thinks the speech is too long. ‎",
                    ],
                    "jawaban" => "She believes she can succeed.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "",
                    "pilihan" => [
                        "She'd like to offer the man a scholarship.‎",
                        "The documents were returned to her with a ‎signature.‎",
                        "She needs to sign the documents.‎",
                        "She works in the scholarship office.‎",
                    ],
                    "jawaban" => "She needs to sign the documents.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "",
                    "pilihan" => [
                        "He doesn't have time to pay the bills.‎",
                        "The bills weren't paid on time.‎",
                        "Of course, he paid the bills on time.‎",
                        "He will pay the bills for the last time.‎",
                    ],
                    "jawaban" => "The bills weren't paid on time.‎",
                ],
            ],
            [
                "tipe" => "audio",
                "data" => "v1 26-30.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "",
                    "pilihan" => [
                        "He thinks the lecture was really interesting.‎",
                        "He's not sure if the ideas are workable.‎",
                        "He understood nothing about the lecture.‎",
                        "He's not sure what the woman would like to ‎know.‎",
                    ],
                    "jawaban" => "He understood nothing about the lecture.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "",
                    "pilihan" => [
                        "He missed an opportunity.‎",
                        "He was late for his trip.‎",
                        "He should take the next boat.‎",
                        "He should send in his application.‎",
                    ],
                    "jawaban" => "He missed an opportunity.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "",
                    "pilihan" => [
                        "He agrees with what she said.‎",
                        "He thinks she didn't say anything.‎",
                        "He couldn't hear what she said.‎",
                        "He did hear what she said.‎",
                    ],
                    "jawaban" => "He did hear what she said.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "",
                    "pilihan" => [
                        "That John would pick them up for the ‎concert.‎",
                        "That the concert would start earlier.‎",
                        "That John would not be going to the concert.‎",
                        "That they would be late to the concert. ‎",
                    ],
                    "jawaban" => "That John would not be going to the concert.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "",
                    "pilihan" => [
                        "He enjoyed the trip immensely.‎",
                        "The boat trip was really rough.‎",
                        "He couldn't have enjoyed the trip more.‎",
                        "The water was not very rough.‎",
                    ],
                    "jawaban" => "The boat trip was really rough.‎",
                ],
            ],
            // 31 
            [
                "tipe" => "petunjuk",
                "data" => "
                    <center>PART B</center><br>
                    <center>DIRECTION</center><br>
                    <p>In this part of the test, you will hear longer conversations. After each conversation, you will hear several ‎questions. The conversations and questions will not be repeated. After you hear question, read the four ‎possible anwers in your test book and choose the best answer. Then, on your answer sheet, find the number ‎of the question and fill in the space that corresponds to the letter of the answer you have choosen. ‎Remember you are not allowed to take notes or write in your test book.</p>‎"
            ],
            [
                "tipe" => "audio",
                "data" => "v1 31-34.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "",
                    "pilihan" => [
                        "The students",
                        "Two professors",
                        "Two sociologists.‎",
                        "Two lecturers.‎",
                    ],
                    "jawaban" => "The students",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "",
                    "pilihan" => [
                        "She want his opinion of sociologists",
                        "She want to hear him lecturer",
                        "She want to know about a course he took",
                        "She want to meet professor Patterson.‎",
                    ],
                    "jawaban" => "She want to know about a course he took",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "",
                    "pilihan" => [
                        "A course where the professor lectures.‎",
                        "A course where the students just listen and ‎take notes.‎",
                        "A course with Professor Patterson.‎",
                        "A course where the students take part in ‎discussion.‎",
                    ],
                    "jawaban" => "A course where the students take part in ‎discussion.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "",
                    "pilihan" => [
                        "She thinks it'll be boring.‎",
                        "She doesn't want to take it.‎",
                        "It sounds good to her.‎",
                        "She'd prefer a course with more student ‎participation. ‎	",
                    ],
                    "jawaban" => "It sounds good to her.‎",
                ],
            ],
            [
                "tipe" => "audio",
                "data" => "v1 35-38.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "",
                    "pilihan" => [
                        "From a friend.‎",
                        "From the newspaper.‎",
                        "From the discussion.‎",
                        "From the utility company.‎",
                    ],
                    "jawaban" => "From the newspaper.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "",
                    "pilihan" => [
                        "In a far desert. ‎",
                        "Close by.‎",
                        "At the utility company's headquarters.‎",
                        "The man has no idea.‎",
                    ],
                    "jawaban" => "Close by.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "",
                    "pilihan" => [
                        "It's cheaper in the short run.‎",
                        "The utility company won't need any extra ‎money.‎",
                        "The plant's far away.‎",
                        "It exists in large quantities.‎",
                    ],
                    "jawaban" => "It exists in large quantities.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => "",
                    "pilihan" => [
                        "She's concerned it'll be too costly.‎",
                        "She thinks the price is too low.‎",
                        "She thinks the plant is totally unnecessary.‎",
                        "She thinks the utility company has a good ‎idea.‎",
                    ],
                    "jawaban" => "She's concerned it'll be too costly.‎",
                ],
            ],
            // 39 
            [
                "tipe" => "petunjuk",
                "data" => "
                    <center>PART C</center>
                    <center>DIRECTION</center>
                    <p>In this part of the test,  you will hear several talks after each talk you will hear some questions. The talks ‎and questions will not be repeated. After you here the question, read the four posible answer in your test book, ‎and choose the best answer. Then on your answer sheet, find the number of the questions, and fill in the space ‎that corresponds to the letter of the answer you have choosen.‎</p>
                    <p>Now we will begin to the part C with the first talk. Questions 36 through 42, listen to a man's talking to a ‎group of students.‎</p>
                "
            ],
            [
                "tipe" => "audio",
                "data" => "v1 39-42.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39.,
                    "soal" => "",
                    "pilihan" => [
                        "The Employment Office manager.‎",
                        "The university registrar.‎",
                        "The bookstore manager.‎",
                        "A student working in the bookstore.‎",
                    ],
                    "jawaban" => "The bookstore manager.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "",
                    "pilihan" => [
                        "Prepare a schedule.‎",
                        "Decide which workers to hire.‎",
                        "Plan student course schedules.‎",
                        "Train office workers.‎",
                    ],
                    "jawaban" => "Prepare a schedule.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 41,
                    "soal" => "",
                    "pilihan" => [
                        "What the students majors are.‎",
                        "When the students are able to work.‎",
                        "Why the students want to work.‎",
                        "In which jobs the students have experience.‎",
                    ],
                    "jawaban" => "When the students are able to work.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 42,
                    "soal" => "",
                    "pilihan" => [
                        "Cashier.‎",
                        "Shelf stocker.‎",
                        "Business office worker.‎",
                        "Phone operator.‎",
                    ],
                    "jawaban" => "Phone operator.‎",
                ],
            ],
            [
                "tipe" => "audio",
                "data" => "v1 43-46.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 43,
                    "soal" => "",
                    "pilihan" => [
                        "Soft, warm clothing.‎",
                        "Problems in landfills.‎",
                        "How fleece is obtained.‎",
                        "Recycling soda bottles.‎",
                    ],
                    "jawaban" => "Recycling soda bottles.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 44,
                    "soal" => "",
                    "pilihan" => [
                        "They were left in landfill areas.",
                        "They were reused.‎",
                        "They were recycled.‎",
                        "They were refilled.‎",
                    ],
                    "jawaban" => "They were left in landfill areas.",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 45,
                    "soal" => "",
                    "pilihan" => [
                        "Dye.‎",
                        "Warm, soft clothing.‎",
                        "Computer chips.‎",
                        "Glass bottles.‎	‎",
                    ],
                    "jawaban" => "Warm, soft clothing.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 46,
                    "soal" => "",
                    "pilihan" => [
                        "Buying plastic bottles.‎",
                        "Solving te problems in landfills.‎",
                        "Buying these recycled products.‎",
                        "Becoming aware of the environment.‎",
                    ],
                    "jawaban" => "Buying these recycled products.‎",
                ],
            ],
            [
                "tipe" => "audio",
                "data" => "v1 47-50.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 47,
                    "soal" => "",
                    "pilihan" => [
                        "The Central Pacific Group.‎",
                        "The Transcontinental Railroad Company.‎",
                        "A group from Ogden, Utah.‎",
                        "Two separate railroad companies.",
                    ],
                    "jawaban" => "Two separate railroad companies.",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 48,
                    "soal" => "",
                    "pilihan" => [
                        "The had to lay tracks across a mountain ‎range.",
                        "They had to cross all of Nebraska.‎",
                        "They had to work for another railroad ‎company.‎",
                        "They had to move westward to Sacramento, ‎California.‎",
                    ],
                    "jawaban" => "The had to lay tracks across a mountain ‎range.",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 49,
                    "soal" => "",
                    "pilihan" => [
                        "Several days.‎",
                        "Several weeks.‎",
                        "Several months.‎",
                        "Several years.‎",
                    ],
                    "jawaban" => "Several years.‎",
                ],
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 50,
                    "soal" => "",
                    "pilihan" => [
                        "Dynamite was used to blast out access.‎",
                        "A golden spike was hammered into the last ‎track.‎",
                        "The workers labored dangerously and ‎exhaustingly.‎",
                        "The workers traversed the Sierra Nevadas.‎",
                    ],
                    "jawaban" => "A golden spike was hammered into the last ‎track.‎",
                ],
            ],
        ];

        return $data;
    }

    public function get_soal_structurev1(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <center>SECTION 2‎</center><br>
                    <center>STRUCTURE AND WRITTEN EXPRESSION</center><br>
                    <center>Time: 25 minutes</center><br>
                    <center>‎40 questions‎</center><br>
                    <center>DIRECTIONS</center><br>
                    <p>Questions number 1-15 are incomplete sentences. Beneath each sentence you will see four words or ‎phrases, marked (A), (B), (C), and (D). Choose the one word of phrase that best complets the sentence. Then, ‎on your answer sheet, find the number of the question and fill in the space that corresponds to the letter of the ‎answer you have chosen. Fill in the space so that the letter inside the oval cannot be seen.‎</p>",
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "‎ The hard palate.................. between the mounth and nasal passages.‎",
                    "pilihan" => [
                        "forming a partition",
                        "‎a partition forms",
                        "forms a partition",
                        "‎a form and a partition",
                    ],
                    "jawaban" => "forms a partition",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "‎Sam Spade in The Maltese Falcon and Rick Blaine in Casablanca................. of Humphrey Bogart's ‎more famous roles.‎",
                    "pilihan" => [
                        "they are two",
                        "‎two of them are",
                        "‎two of them",
                        "‎are two",
                    ],
                    "jawaban" => "‎are two",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "‎..............., the outermost layer of skin, is about as thick as a sheet of paper over most of the skin.‎",
                    "pilihan" => [
                        "It is the epidermis.‎",
                        "The epidermis.‎",
                        "In the epidermis.‎",
                        "‎The epidermis is.‎",
                    ],
                    "jawaban" => "The epidermis.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "‎During the Precambrian period, the Earth's crust formed, and life...........in the seas. ‎",
                    "pilihan" => [
                        "first appeared.‎",
                        "‎the first to appear.‎",
                        "the first appearance.‎",
                        "‎appearing first.‎",
                    ],
                    "jawaban" => "first appeared.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "‎When fluid accumulates against the eardrum, a second more insidious type of .................. ‎",
                    "pilihan" => [
                        "otitis media may develop.‎",
                        "‎developing otitis media.‎",
                        "‎the development of otitis media.",
                        "‎to develop otitis media.‎",
                    ],
                    "jawaban" => "otitis media may develop.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "‎Before the Statue of Liberty arrived in the United States, newspaper invited the public to help ‎determine where .............. placed after its arrival.‎",
                    "pilihan" => [
                        "should the statue be.‎",
                        "‎the statue being.‎",
                        "‎it should be the statue.‎",
                        "the statue should be.‎",
                    ],
                    "jawaban" => "the statue should be.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "‎A stock.............. at an inflated price is called a watered stock.‎",
                    "pilihan" => [
                        "is issued.‎",
                        "‎issued.‎",
                        "it is issued.‎",
                        "‎which issued.‎",
                    ],
                    "jawaban" => "‎issued.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "‎Acidic lava flows readily and tends to cover much larger areas, while basic lava.................‎",
                    "pilihan" => [
                        "viscous.‎",
                        "more viscous.‎",
                        "‎is more viscous.‎",
                        "‎it is more viscous.‎",
                    ],
                    "jawaban" => "‎is more viscous.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "‎Seismic reflection profiling has............. the ocean floor is underlain by a thin layer of nearly ‎transparent sediments.‎",
                    "pilihan" => [
                        "reveal that.‎",
                        "‎revealed that.‎",
                        "‎the revelation of.‎",
                        "‎revealed about.‎",
                    ],
                    "jawaban" => "‎revealed that.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "‎‎............ and terrifying, coral snakes can grow to 4 feet (1.2 meters) in length.‎",
                    "pilihan" => [
                        "They are extremely poisonous.‎",
                        "The poison is extreme.‎",
                        "‎Extremely poisonous.‎",
                        "‎An extreme amount of poison.‎",
                    ],
                    "jawaban" => "‎Extremely poisonous.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "‎The leaves of the white mulberry provide food for silkworms,.............. silk fabrics are woven.‎",
                    "pilihan" => [
                        "whose cocoons.‎",
                        "‎from cocoons.‎",
                        "‎whose cocoons are from.‎",
                        "‎from whose cocoons.‎",
                    ],
                    "jawaban" => "‎from whose cocoons.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "‎As............... in Greek and Roman mythology, harpies were frightful monsters that were half woman ‎and half bird.‎",
                    "pilihan" => [
                        "‎described.‎",
                        "‎to describe.‎",
                        "‎description.",
                        "‎describing.‎",
                    ],
                    "jawaban" => "‎described.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "‎Not only .......... generate energy, but it also produces fuel for other fission reactors. ‎",
                    "pilihan" => [
                        "a nuclear breeder reactor.‎",
                        "‎it is a nuclear breeder reactor.‎",
                        "does a nuclear breeder reactor.‎‎",
                        "is a nuclear breeder reactor.‎",
                    ],
                    "jawaban" => "does a nuclear breeder reactor.‎‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "‎D.W.Griffith pioneered many of the stylistic features and filmmaking techniques........as the ‎Hollywood standard.‎",
                    "pilihan" => [
                        "that established.‎",
                        "‎that became established.‎",
                        "what established.‎",
                        "‎what became established.‎",
                    ],
                    "jawaban" => "‎that became established.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "‎.......... be needed, the water basin would need to be dammed.‎",
                    "pilihan" => [
                        "Hydroelectric power should.‎",
                        "‎When hydroelectric power.‎",
                        "Hydroelectric power.‎",
                        "‎Should hydroelectric power.‎",
                    ],
                    "jawaban" => "‎Should hydroelectric power.‎",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <center>PART B</center><br>
                    <center>DIRECTIONS</center><br>
                    <p>In questions 16-40 each sentences has four underlined words of phrases. The four underlined parts of the ‎sentence are marked (A), (B), (C), and (D). indentify the one underlined word of phrase that must be changed ‎in order for the sentence to be correct. Then, on your answer sheet, find the number of the question and fill in ‎the space that correspondends to the letter of the answer you have choosen.‎</p>",
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "‎Mosquitoes will <u>accepts</u> the <u>malaria</u> parasite at <u>only one</u> stage of the parasite's <u>complex</u> life cycle.‎",
                    "pilihan" => [
                        "accepts",
                        "malaria",
                        "only one",
                        "complex",
                    ],
                    "jawaban" => "accepts",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "‎The <u>counterpart</u> <u>of</u> a negative <u>electrons</u> is the <u>positive</u> proton.‎",
                    "pilihan" => [
                        "counterpart",
                        "of",
                        "electrons",
                        "positive",
                    ],
                    "jawaban" => "electrons",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "‎Alexander Hamilton's <u>advocacy</u> of a <u>strong</u> national government brought <u>he</u> into bitter <u>conflict</u> with ‎Thomas Jefferson.‎",
                    "pilihan" => [
                        "advocacy",
                        "strong",
                        "he",
                        "conflict",
                    ],
                    "jawaban" => "he",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "‎There <u>are</u> more than eighty-four million <u>specimens</u> in the National Museum of Natural History's <u>‎collection</u> of biological, geological, archeological, and <u>anthropology</u> treasures.‎",
                    "pilihan" => [
                        "are",
                        "specimens",
                        "‎collection",
                        "anthropology",
                    ],
                    "jawaban" => "anthropology",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "<u>‎After</u> George Washington married <u>widow</u> Martha Custis, the couple <u>comes</u> to <u>reside</u> at Mount Vernon.‎",
                    "pilihan" => [
                        "‎After",
                        "widow",
                        "comes",
                        "reside",
                    ],
                    "jawaban" => "‎After",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "<u>‎Rubberized</u> asphalt can <u>hardly</u> be classified <u>as</u> cutting edge at this stage in <u>their</u> development.‎",
                    "pilihan" => [
                        "‎Rubberized",
                        "hardly",
                        "as",
                        "their",
                    ],
                    "jawaban" => "their",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "‎Rhesus <u>monkeys</u> <u>exhibit</u> patterns of <u>shyness</u> similar to <u>that</u> in humans.",
                    "pilihan" => [
                        "monkeys",
                        "exhibit",
                        "shyness",
                        "that",
                    ],
                    "jawaban" => "that",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "‎In space, with <u>no</u> gravity for muscles to work <u>against</u>, <u>the body</u> becomes <u>weakly</u>.‎",
                    "pilihan" => [
                        "no",
                        "against",
                        "the body",
                        "weakly",
                    ],
                    "jawaban" => "weakly",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "‎Fort Jefferson,in the Dry Tortugas <u>off</u> the southern <u>tip</u> of Florida, can be <u>reach</u> <u>only by</u> boat or plane.‎",
                    "pilihan" => [
                        "off",
                        "tip",
                        "reach",
                        "only by",
                    ],
                    "jawaban" => "reach",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "‎Quarter horses were <u>developed</u> in eighteenth-century Virginia <u>to race</u> on <u>courses short</u> of about a quarter ‎ of a mile <u>in length</u>.‎",
                    "pilihan" => [
                        "developed",
                        "to race",
                        "courses short",
                        "in length",
                    ],
                    "jawaban" => "courses short",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "‎<u>‎‎Supersonic</u> flight is flight <u>that</u> is <u>faster</u> the speed of sound.‎",
                    "pilihan" => [
                        "‎‎Supersonic",
                        "that",
                        "faster",
                        "speed of sound",
                    ],
                    "jawaban" => "faster",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "‎Since the dawn of agriculture 9,000 years <u>ago</u>, only <u>a</u> <u>few</u> animal species <u>had been</u> domesticated.‎",
                    "pilihan" => [
                        "ago",
                        "a",
                        "few",
                        "had been",
                    ],
                    "jawaban" => "had been",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "‎The Betaken house Ruins at Navajo Monument <u>is</u> among the <u>largest</u> and most <u>elaborate</u> cliff dwellings ‎in the <u>country</u>",
                    "pilihan" => [
                        "is",
                        "largest",
                        "elaborate",
                        "country",
                    ],
                    "jawaban" => "is",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "‎The island of Kauai has <u>much</u> streams, some <u>of which</u> have <u>worn</u> deep canyone into the <u>rock</u>.‎",
                    "pilihan" => [
                        "much",
                        "of which",
                        "worn",
                        "rock",
                    ],
                    "jawaban" => "much",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "‎It's <u>a common</u> observation that liquids <u>will soak</u> through some materials <u>but not</u> throught <u>other.</u>‎",
                    "pilihan" => [
                        "a common",
                        "will soak",
                        "but not",
                        "other.",
                    ],
                    "jawaban" => "other.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "<u>‎Surrounded</u> by forrested mountain <u>slopes are</u> town of Telluride, a former gold-mining town 7,500 feet ‎above <u>sea level.</u>",
                    "pilihan" => [
                        "‎Surrounded",
                        "slopes are",
                        "a former",
                        "sea level.",
                    ],
                    "jawaban" => "slopes are",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "‎The newsreels of Hearst Metronome News, which formed part of <u>every</u> moviegoer's experience in the ‎era <u>‎before television</u> offer <u>an</u> unique record of the <u>events</u> of the 1930s.‎",
                    "pilihan" => [
                        "every",
                        "‎before television",
                        "an",
                        "events",
                    ],
                    "jawaban" => "an",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "<u>‎Probrably</u> <u>the best known</u> of all dinosaurus, the Tyranosaurus was <u>larger</u> and <u>last</u> of the meat-eating ‎carnosaurus.‎",
                    "pilihan" => [
                        "‎Probrably",
                        "the best known",
                        "larger",
                        "last",
                    ],
                    "jawaban" => "larger",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "<u>‎Unlikely</u> gas <u>sport</u> ballons, hot air balloons do not <u>have</u> <u>nets</u>",
                    "pilihan" => [
                        "‎Unlikely",
                        "sport",
                        "have",
                        "nets",
                    ],
                    "jawaban" => "‎Unlikely",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "<u>‎Born</u> in Massachusetts in 1852, Albert Farbanks <u>has begun</u> <u>making</u> banjos in Boston in the <u>late</u> 1870s.‎",
                    "pilihan" => [
                        "‎Born",
                        "has begun",
                        "making",
                        "late",
                    ],
                    "jawaban" => "has begun",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "‎Methane in wetlands <u>comes</u> <u>from</u> soil bacteria that <u>consumes</u> organic plant <u>matter</u>",
                    "pilihan" => [
                        "comes",
                        "from",
                        "consumes",
                        "matter",
                    ],
                    "jawaban" => "consumes",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "‎Alois Alzheimer made the first <u>observers</u> of the <u>telltale</u> signs of the disease that today <u>bears</u> <u>his name.</u>‎",
                    "pilihan" => [
                        "observers",
                        "telltale",
                        "bears",
                        "his name.",
                    ],
                    "jawaban" => "observers",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => '‎Edward Mc Dowell <u>remembers</u> as the <u>composer</u> of such <u>perennial</u> <u>favourites</u> as "To a wild Rose" and ‎‎"to ‎ a Water Lily"',
                    "pilihan" => [
                        "remembers",
                        "composer",
                        "perennial",
                        "favourites",
                    ],
                    "jawaban" => "remembers",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "‎Animism is <u>belief</u> that objects and natural <u>phenomena</u> such as rivers, rock, and wind are <u>live</u> and have <u>‎feelings</u>.‎",
                    "pilihan" => [
                        "belief",
                        "phenomena",
                        "live",
                        "‎feelings",
                    ],
                    "jawaban" => "live",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "‎Newtonian physics <u>accounts</u> <u>from</u> the <u>observation</u> of the <u>orbits</u> of the planets and moons.‎",
                    "pilihan" => [
                        "accounts",
                        "from",
                        "observation",
                        "orbits",
                    ],
                    "jawaban" => "from",
                ]
            ],
        ];

        return $data;
    }

    public function get_soal_readingv1(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <center>SECTION 3‎</center><br>
                    <center>READING COMPREHENSION</center><br>
                    <center>Time:55 minutes</center><br>
                    <center>‎50 Questions‎</center><br>
                    <center>Lines Question 1 through 10 are based on the following passage</center><br>
                    <p>Niagara Falls, on of the most famous North American natural wonders, has long been a popular ‎tourist destination. Tourists today <b>flock</b> to see the two falls that actually constitute Niagara falls: the ‎‎173-foot-high Horseshoe Falls on the canadian side of the Niagara river in the canadian province of ‎ontario and the 182-foot-high American Falls on the U.S. side of the river in the state of New York. ‎Approximately 85 percent of the water that goes over the falls actually goes over Horseshoe Falls, ‎with the rest going over American Falls.‎</p>
                    <p>Most visitors come between April an October, and it is quite popular activity to take a <b>streamer</b> ‎out onto river and <b>right up</b> to the base of the falls for the close up view. It is also possible to get a ‎spectacular view of the falls from the strategic locations along the Niagara river, such as prospect ‎point of table rock, or from one of the four observation towers which have heights up to 500 feet.‎</p>
                    <p>Tourists have been visiting Niagara Falls in large numbers since the 1800s; annual visittation now ‎averages above 10 million visitors per year. Because of concern that all these tourists would ‎inadvertently destroy the natural beauty of this scenic wonder, the state of New York in 1885 created ‎Niagara Falls Park in order to protect the land surrounding American Falls. A year later Canada ‎created Queen Victoria park on the Canadian side of the Niagara, around Horseshoes Falls. With the ‎area surrounding the falls under the <b>jurisdiction</b> of goverment agencies, appropriate steps could be ‎taken to preserve the <b>pristine</b> beauty of the area.‎</p>",
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "‎What is the major pint that the author is making in this passage? ...........‎",
                    "pilihan" => [
                        "‎Niagara Falls can be viewed from either the ‎American side or the Canadian side.",
                        "A trip to the United States isn't complete ‎without a visite to Niagara Falls.‎",
                        "‎Niagara Falls has had an interesting history.‎",
                        "‎It has been necessary to protect Niagara Falls ‎from the many tourists who go there.‎",
                    ],
                    "jawaban" => "‎It has been necessary to protect Niagara Falls ‎from the many tourists who go there.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => 'The word "flock" in the first paragraph could the best replaced by ...........‎',
                    "pilihan" => [
                        "‎Come by plane.",
                        "‎Come in large numbers.",
                        "‎Come out of boredom.‎",
                        "‎Come without knowing that they will see.‎",
                    ],
                    "jawaban" => "‎Come in large numbers.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "‎Aaccording to the passage, which of the following best describes Niagara Falls? ...........‎",
                    "pilihan" => [
                        "‎Niagara Falls consists of two rivers, one canadian and the other American",
                        "‎American falls is considerably higher than Horseshoe Falls.",
                        "The Niagara River has two falls, one in Canada and the one in the United Stated.‎",
                        "‎Although the Niagara River flows through the United States and Canada, the falls are only in the ‎United States.‎",
                    ],
                    "jawaban" => "The Niagara River has two falls, one in Canada and the one in the United Stated.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => 'A "streamer" in “and it is quite popular activity to take a <b>streamer</b> ‎out onto river and right up to the base of the falls for the close up view” is probably ...........',
                    "pilihan" => [
                        "A bus",
                        "A boat",
                        "A walkway",
                        "A park",
                    ],
                    "jawaban" => "A boat",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => 'The Expression "right up"in “and it is quite popular activity to take a streamer ‎out onto river and <b>right up</b> to the base of the falls for the close up view” could best be replaces by ...........‎',
                    "pilihan" => [
                        "Turn to the right.‎",
                        "Follow correct procedures.‎",
                        "‎travel upstream.",
                        "All the way up.‎",
                    ],
                    "jawaban" => "All the way up.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "The passage implies that tourists prefer to ...........‎",
                    "pilihan" => [
                        "Visit Niagara Falls during warmer weather",
                        "See the falls from a great distance",
                        "‎Take a ride over the falls",
                        "Come to Niagara Falls for a winter vacation",
                    ],
                    "jawaban" => "Visit Niagara Falls during warmer weather",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "According to the passage, why was Niagara Park created? ...........‎",
                    "pilihan" => [
                        "‎‎To encourage tourists to visit Niagara Falls.‎",
                        "To show off the natural beauty of Niagara ‎Falls.‎",
                        "‎To protect the area around Niagara Falls.‎",
                        "To force Canada to open Queen Victoria Park.‎",
                    ],
                    "jawaban" => "‎To protect the area around Niagara Falls.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => '‎The word "<b>jurisdiction</b>" in With the ‎area surrounding the falls under the <b>jurisdiction</b> of goverment agencies  is closest in meaning to ...........‎',
                    "pilihan" => [
                        "‎View",
                        "Assistance",
                        "Taxation",
                        "Control‎",
                    ],
                    "jawaban" => "Control‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => 'The word "pristine" in “appropriate steps could be ‎taken to preserve the <b>pristine</b> beauty of the area” is closest in meaning to ...........‎',
                    "pilihan" => [
                        "‎‎Pure and natural",
                        "Highly developed",
                        "Well-regulated",
                        "Overused",
                    ],
                    "jawaban" => "‎‎Pure and natural",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "‎The paragraph following the passage most probalby discusses ...........‎",
                    "pilihan" => [
                        "Aditional ways to observe the falls.‎",
                        "Steps take by givernment to protect the falls.‎",
                        "A detailed decription of the division of the falls between the united states and canada.‎",
                        "Further problems that are destroying the area around the falls.‎‎",
                    ],
                    "jawaban" => "Steps take by givernment to protect the falls.‎",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <center>Lines Question 11 through 19 are based on the following passage</center>
                    <p>‎What is commonly called pepper in reality comes from two very different families of plants. ‎Black and white pepper both come from the fruit of the Piper nigrum, a vine with fruits called ‎peppercorns. The  peppercorns turn from green to red as they ripen and finally blacken as they dry ‎out. The dried-out peppercorns are ground to obtain black pepper. White pepper; which has a more ‎subtle flavor than black pepper, comes from the same peppercorns as black pepper; to obtain white ‎pepper, the outher hull of the peppercorns, the pericarp, is removed before the peppercorns is ground.‎</p>
                    <p>Red and green peppers, on the other hand, come from completely different family from black and ‎white pepper. Red and green pepper are from the genus Capsicum. Plant of this type generaly have ‎tiny white flowers and fruite which can be any one of a numbers of colors, shape and sizes. These ‎peppers range in flavor from very mild and sweet to the ost incredibly burning taste imaginable.‎</p>
                    <p>Bell peppers are the most mild, while habaneros are the most burning.‎</p>
                    <p>Cristopher Columbus is responsible for the present-day confusion over what a pepper is. The ‎Piper nigrum variety of pepper was highly valued for centuries, and high demand for pepper by ‎Europeans was a major cause of the fisteenth-century <b>push</b> to locateocena routes to spice-growing ‎regions of Asia. When Columbus arrived in the New World in 1492, he was particulary interested in ‎finding black peppers because of the high price that it would command in Europe, Columbus came ‎accross plants from the Capsicum family in use among the people of the New World, and he ‎incorrectly identified them as relatives of black pepper. Columbus introduced the spicy Capsicum ‎chili peppers to Europeans on his return from the 1492 voyage and traders later spread <b>them</b> to Asia ‎and Africa. These capsicum peppers have continued to be called peppers in spite of the fact that they ‎are not related to the black and white pepper of the Piper nigrum family.‎</p>",
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "The purpose of this passage is to ...........‎",
                    "pilihan" => [
                        "Explain why there is confussion today over peppers.‎",
                        "Provide the scientific classification of various types of peppers.‎",
                        "Demonstrate that it was columbus who brought peppers to europe.",
                        "Classify the variety of sizes, shapes, and colors of peppers.‎",
                    ],
                    "jawaban" => "Explain why there is confussion today over peppers.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => 'The word "turn" in line 3 could best be replaced by ...........‎',
                    "pilihan" => [
                        "‎Revert",
                        "Exchange‎",
                        "Veer",
                        "Change‎",
                    ],
                    "jawaban" => "Change‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "‎According to the passage, both black and white pappers ...........‎",
                    "pilihan" => [
                        "Come from different plants.‎",
                        "Change colors after they are ground.‎",
                        "‎Are ground from dried out peppercorns.‎",
                        "Have the same flavor.‎",
                    ],
                    "jawaban" => "‎Are ground from dried out peppercorns.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "‎What part of the piper nigrum is the pericarp? ...........‎",
                    "pilihan" => [
                        "The seed inside the fruit.‎",
                        "The outer covering of the fruit.‎",
                        "‎The pulp inside the vine.‎",
                        "The outer covering of the vine.‎",
                    ],
                    "jawaban" => "The outer covering of the fruit.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "‎What usually does NOT vary in a capsicum plant? ...........‎",
                    "pilihan" => [
                        "The colors of the flower.‎",
                        "The size of the fruit.‎",
                        "The pulp of the fruit.‎",
                        "The colors of the fruit.‎",
                    ],
                    "jawaban" => "The colors of the flower.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => 'The word "push" in “Europeans was a major cause of the fisteenth-century <b>push</b> to locateocena routes to spice-growing ‎regions of Asia” could best be replaced by ...........‎',
                    "pilihan" => [
                        "Shove ‎",
                        "Strength",
                        "‎Drive",
                        "Hit",
                    ],
                    "jawaban" => "‎Drive",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => 'The pronoun "them" in “Columbus introduced the spicy Capsicum ‎chili peppers to Europeans on his return from the 1492 voyage and traders later spread <b>them</b> to Asia ‎and Africa” refers to ...........‎',
                    "pilihan" => [
                        "Plants",
                        "People",
                        "‎Relatives",
                        "Europeans",
                    ],
                    "jawaban" => "Plants",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "‎It can be infered from the passage that chili peppers originally came from ...........‎",
                    "pilihan" => [
                        "Europe ‎",
                        "Asia",
                        "America ‎",
                        "Africa",
                    ],
                    "jawaban" => "America ‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "‎Where in the passage does the author explain the mistake that Columbus made? ...........‎",
                    "pilihan" => [
                        "‎First paragraph",
                        "Second paragraph",
                        "Third paragraph",
                        "Last paragraph",
                    ],
                    "jawaban" => "Last paragraph",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <center>Lines Question 20 through 31 are based on the following passage</center>
                    <p>Just two month after the flight of Apollo 10, the Apollo 11 astronauts made their historic landing ‎on the surface of the moon. This momentous trip for humanity also provided scientists with an <b>‎abundance</b> of material for study; from rock and soil samples brought back from the moon. Scientist ‎have been able to determine much about hte composition of the moon as well as to draw inferences ‎about the development of the moon from its composition.‎</p>
                    <p>The moon soil that came back from apollo 11 contains small bits of rock and glass which were ‎probalby grounds from larger rocks when meteors impacted with the surface of the moon. The bits of ‎glass are <b>spherical</b> in shape and constitute approximately half of the moon soil. Scientists found no ‎trace of animal or plant life in this soil.‎</p>
                    <p>In addition to the Moon soil, astronauts gathered two basic types of rocks from the surface of the ‎Moon. Basalt and Breccia. Basalt is acooled and hardened vocanic lava common to the Earth. Since ‎Basalt is formed under extremely high temperatures, the presence of this type of Rock is an <b>‎indication</b> that the temperature of the Moon was once Extremely hot. Breccia, the other kind of rock  ‎brought back by the astronauts, was formed during the impac of falling objects on the surface of the ‎Moon. This secong type of rock consists of small pieces of rock compressed together by the force of ‎impact. Gases such as hydrogen ang helium were found in some of rocks, and scientists believe that ‎these gases were carried to the Moon by the solar wind, the streams of gases that are constantly <b>‎emitted</b> by the Sun.‎</p>",
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "‎This paragraph preceding the passage most likely discusses  ...........‎",
                    "pilihan" => [
                        "Astronaut training.‎",
                        "The conception of the apollo space program.‎	",
                        "‎A different space trip.‎",
                        "Previous moon landings.‎",
                    ],
                    "jawaban" => "‎A different space trip.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "‎What is the subject of this passage ...........‎",
                    "pilihan" => [
                        "The Apollo astronauts.‎",
                        "Soil on the Moon.",
                        "What the Moon is made of.‎",
                        "Basalt and Breccia.‎",
                    ],
                    "jawaban" => "What the Moon is made of.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => 'An "abundance" in “scientists with an <b>‎abundance</b> of material for study” is ...........‎',
                    "pilihan" => [
                        "A disorderly pile.‎",
                        "A wealthy bunch.‎",
                        "‎An insignificant proportion.‎",
                        "A large amount.‎",
                    ],
                    "jawaban" => "A large amount.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "‎According to the passage, what does the Moon soil consist of? ...........‎",
                    "pilihan" => [
                        "Hydrogen and helium.‎",
                        "Large chunks of volcanic lava.‎",
                        "‎Tiny pieces of stones and glass.‎",
                        "Streams of gases.‎",
                    ],
                    "jawaban" => "‎Tiny pieces of stones and glass.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => 'The word "spherical" in “The bits of ‎glass are <b>spherical</b> in shape and constitute approximately half of the moon soil” is closest in meaning to ...........‎',
                    "pilihan" => [
                        "Earten",
                        "Circular",
                        "Angular",
                        "Amorphous",
                    ],
                    "jawaban" => "Circular",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "‎Which of the following was not brought back to the earth by astronauts? ...........‎",
                    "pilihan" => [
                        "Basalt",
                        "Soil",
                        "Breccia",
                        "Plant life",
                    ],
                    "jawaban" => "Plant life",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => 'An "indication" in “Rock is an <b>‎indication</b> that the temperature of the Moon was once Extremely hot” is ...........‎',
                    "pilihan" => [
                        "An exhibition",
                        "A clue",
                        "A denial",
                        "A dictate",
                    ],
                    "jawaban" => "A clue",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "‎According to the passage, breccia was formed ...........‎",
                    "pilihan" => [
                        "When object struck the Moon.‎",
                        "From volcanic lava.‎",
                        "‎When streams of gases hit the surface of the ‎Moon.‎",
                        "From the interaction of helium and hydrogen.‎",
                    ],
                    "jawaban" => "When object struck the Moon.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "‎It is implied in the passage that scientists believe that the gases found in the Moon rocks ...........‎",
                    "pilihan" => [
                        "Were not originally from the Moon.‎",
                        "Were created inside the rocks.‎",
                        "‎Traveled from the moon to the Sun.‎",
                        "Caused the Moon's temperature to rise.‎",
                    ],
                    "jawaban" => "Were not originally from the Moon.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => 'The word "emitted" in “that are constantly <b>‎emitted</b> by the Sun” is closest in meaning to ...........‎',
                    "pilihan" => [
                        "Set off‎",
                        "Vaporized",
                        "Sent out",
                        "Separated",
                    ],
                    "jawaban" => "Sent out",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "‎The outhor's purpose in this passage is to ...........‎",
                    "pilihan" => [
                        "Describe some rock and soil samples.‎",
                        "Explain some of the things learned from ‎space lights.‎",
                        "Propose a new theory about the creation of ‎the moon.‎",
                        "Demontrate the difference betwen basalt and ‎breccia.‎",
                    ],
                    "jawaban" => "Explain some of the things learned from ‎space lights.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "It can be inferred from the passage that ...........‎",
                    "pilihan" => [
                        "The only items of importance that astronauts brought back from the Moon were rock and soil ‎samples.‎",
                        "Scientists learned relatively little from the Moon rock and soil sample.‎",
                        "Scientists do not believe that it is necessary to return to the Moon.‎",
                        "Rock and soil samples were only some of a myriad of significant items from the Moon.‎",
                    ],
                    "jawaban" => "Rock and soil samples were only some of a myriad of significant items from the Moon.‎",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <center>Questions 32 through 40 are based on the following passage.‎</center>
                    <p>Today the most universally known style of trousers for both men an women is jeans; these trouser ‎are worn throughout the world on a variety of occasions and in diverse situations. Also called levis or ‎denims, jeans have an interesting history, on that is intermixed with the derivations of the words ‎jeans, denim, and levis.‎</p>
                    <p>The word jeans is derived from the name of the place where a similar style of pants developed. In ‎the sixteen century, sailor from Genoa, Italy, wore a rather <b>unique</b> type of cotton trousers. In the ‎french language, the word for the city of Genoa and for the people from that city is genes; this name ‎became attached to the specific style of pants worn by sailors from this city and developed into the ‎words jeans that today describes the <b>descendents</b> of the Genovese sailor's cotton pants.‎</p>
                    <p>Similar to the word jeans, the word denim is also derived from a place name. In the seventeenth ‎century, french tailors begin making trousers out of a specialized type of cloth that was developed in ‎the city of Nimes, France, and was known as serge de Nimes. This name for the cloth underwent some ‎transformations, and <b>it</b> eventually developed in today's denim, the material from which jeans are ‎made and alternate name name of these populer pants.‎</p>
                    <p>The word levis came from the name of a person rather than a place. In the nineteenth century, ‎imigrant Levi Strauss came to America and tried his hand at selling heavy canvas to miners taking ‎part in the hunt for gold in northen California. Strauss intended for this canvas to be used by miners ‎to make heavy-duty tents. This first endeavor was a failure, but Strauss later found success when he ‎used the heavy canvas to make indestructible pants for the miners. Levi then <b>switched</b> the fabric from ‎brown canvas to blue denim, creating a style of pants that long outlived him and today is referred to ‎by his name. A modern-day urban shopper out to buy some levis is seraching for a close relative of ‎the product that Strauss had developed years earlier.‎</p>",
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "‎This passage is developed by ...........‎",
                    "pilihan" => [
                        "Citing an effect and its causes.‎",
                        "Explaining history with three specific cases.‎",
                        "‎Demonstration the side of issue.‎",
                        "Developing the biography of a famous person ‎chronologically.‎",
                    ],
                    "jawaban" => "Explaining history with three specific cases.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => '‎The word "unique" in “a rather <b>unique</b> type of cotton trousers” is closest in meaning to ...........‎',
                    "pilihan" => [
                        "Universal ‎",
                        "Solitary",
                        "Unusual",
                        "Commonplace",
                    ],
                    "jawaban" => "Unusual",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "‎All of the folloowing are mentioned in the passage about Genoa EXCEPT that is ...........‎",
                    "pilihan" => [
                        "Was the source of the word jeans.",
                        "Is in italy.‎",
                        "Has a different name in the french language.‎",
                        "Is a landlocked city.‎",
                    ],
                    "jawaban" => "Is a landlocked city.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "The word “descendents” in “the <b>descendents</b> of the Genovese sailor's cotton pants” could best be replaced by ...........‎",
                    "pilihan" => [
                        "Offspring",
                        "Bottoms",
                        "Antecedents",
                        "Derivations",
                    ],
                    "jawaban" => "Offspring",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "‎The word denim was most probably derived from ...........‎",
                    "pilihan" => [
                        "Two french words.‎",
                        "Two italian words.",
                        "One french word and one italian word.‎",
                        "Three french words.‎",
                    ],
                    "jawaban" => "Two french words.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "‎The pronoun “it” in “and <b>it</b> eventually developed in today's denim” refers to ...........‎",
                    "pilihan" => [
                        "City",
                        "Name‎",
                        "Cloth",
                        "Material",
                    ],
                    "jawaban" => "Name‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => 'The word "switched" in “Levi then <b>switched</b> the fabric from ‎brown canvas to blue denim” is closest in meaning to ...........‎',
                    "pilihan" => [
                        "Reduced",
                        "Created‎",
                        "Pounded",
                        "Changed‎",
                    ],
                    "jawaban" => "Changed‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "‎It can be infered from the passage that, in order to develop the pants for which he became famous, ‎Strauss did which of the following? ...........‎",
                    "pilihan" => [
                        "He studied tailoring in Nimes.‎",
                        "He used an existing type of material.‎	",
                        "‎He experimented with bron denim.‎",
                        "He tested the pants for destructability.‎",
                    ],
                    "jawaban" => "He used an existing type of material.‎	",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "‎Where in the passage does the author explain how Strauss' first attempt at creating a business with ‎canvas turned out? ...........‎",
                    "pilihan" => [
                        "First Paragraph",
                        "Second Paragraph",
                        "Third Paragraph",
                        "Last Paragraph",
                    ],
                    "jawaban" => "Last Paragraph",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <center>Lines Questions 41 through 50 are based on the following passage.‎</center>
                    <p>During the heyday of the railroads, when america's rail system provided the bulk of the country's ‎passanger and freight transportation, various types of railroad cars were in service to accomplish the ‎varied tasks handled by the railroads. One type of car that was not available for public use prior to ‎the civil war, however, was a slepping car; ideas for sleeping car abounded at the time, but these idea ‎were unworkable. It unfortunatelly took the death of a president to make the sleeping car a viable ‎reality.‎</p>
                    <p>Cabinet maker George M. Pullman had recognized the demand for sleeping cars and had worked ‎on developing experimental models of sleeping cars in the decade leading up to the Civil War. ‎However, inspite of the fact that he had made succesfull <b>test</b> run on the Chicago and Alton Railroads ‎with his models, he was unable to sell his idea because his models were too wide and to high for ‎Existing train stations and bridges. In 1863, after spending time working as a storekeeper in a ‎Colorado mining town, he invested his savings of twenty thousand dollars, a huge fortune at that ‎time and all the money that he had in the world, in a luxurious sleeping car that he named the ‎Pioneer. Pullman and friend Ben Field bilt the Pioneer on the <b>site</b> of the present-day Chicago Union ‎Station for two years, however, the Pioneer sat on a railroad siding, useless because it could not fit ‎through train station and over bridges.‎</p>
                    <p>Following President Lincoln's assassination in 1865, the states of Illionis, Lincoln's birthplace, ‎wanted to transport the presidential casket in the finest fashion possible. The Pullman Pioneer was ‎the most elegant car around; in order to make the Pulman part of the presidential funeral trin in its ‎run from Springfield to Chicago, the stated cut down station platforms and raised bridges in order to ‎accomodate the luxurious railway car. The Pullman car greatly impressed the funeral party, which ‎included Lincoln's successor as president, general Ulysses S. Grant, and Grant later requested the ‎central railroads followed. George Pullman founded the Pullman Palace car Company in partnership ‎with financier Andrew Carnegie and eventually became a millionaire.‎</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 41,
                    "soal" => "‎Which of the following best states the main idea of the passage ...........‎",
                    "pilihan" => [
                        "America's railroad used to provide much of the country's transportation.‎",
                        "President Lincoln's assassination in 1865 shocked the nation.‎",
                        "George Pullman was the onl one to come up with the idea for a sleeping car.‎",
                        "Pullman's idea for a sleeping car beame workable after Lincoln's death.‎",
                    ],
                    "jawaban" => "Pullman's idea for a sleeping car beame workable after Lincoln's death.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 42,
                    "soal" => 'A "heyday" in the first paragraph is most probably a ...........‎',
                    "pilihan" => [
                        "Time for harvest.‎",
                        "Period with low prices.‎",
                        "‎Period of great success.‎",
                        "‎Type of railroad schedule.‎",
                    ],
                    "jawaban" => "‎Period of great success.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 43,
                    "soal" => "‎It can be inferred from the passage that before the Civil War, sleeping cars ...........‎",
                    "pilihan" => [
                        "Were used abundantly.‎",
                        "Were thought to be a good idea.‎",
                        "‎Were only used prifately.‎",
                        "Were used by presidents.‎",
                    ],
                    "jawaban" => "Were thought to be a good idea.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 44,
                    "soal" => 'The word "test" in “he had made succesfull <b>test</b> run on the Chicago and Alton” could best be replaced by which of the following? ...........‎',
                    "pilihan" => [
                        "Exam ‎",
                        "Trial",
                        "Inspection",
                        "Scientific",
                    ],
                    "jawaban" => "Trial",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 45,
                    "soal" => "‎What was the initial problem that made Pullman's cars unusable? ...........‎",
                    "pilihan" => [
                        "They were too large.‎",
                        "They were too expensive.‎",
                        "‎They were too slow.‎",
                        "They were too unusual.‎",
                    ],
                    "jawaban" => "They were too large.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 46,
                    "soal" => "What is stated in the passage about George Pullman? ...........‎",
                    "pilihan" => [
                        "He once had a job in a store.‎",
                        "He always lived in Chicago.‎",
                        "‎He worked in a mine.‎",
                        "He saved money for his project.‎",
                    ],
                    "jawaban" => "He saved money for his project.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 47,
                    "soal" => 'The word "site" “in the <b>site</b> of the present-day Chicago Union ‎Station for two years” is closest in meaning to which of the following? ...........‎',
                    "pilihan" => [
                        "Factory",
                        "View",
                        "Location",
                        "Foundation",
                    ],
                    "jawaban" => "Location",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 48,
                    "soal" => "‎Why did the state of Illinois want to use the Pullman in Lincoln's funeral train? ...........‎",
                    "pilihan" => [
                        "It was superior to other cars.‎",
                        "It was the only railroad car that could make ‎it from Springfield to chicago.‎",
                        "Ulysses S. Grant request it.‎",
                        "The Pullman Palace car company was a ‎major Illinois business.‎",
                    ],
                    "jawaban" => "It was superior to other cars.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 49,
                    "soal" => "It can be inferred from the passage that the Michigan Central Railroad ...........‎",
                    "pilihan" => [
                        "Was owned by George Pullman.‎",
                        "Controlled the railroad tracks between ‎Detroid and Chicago.‎",
                        "Was the only railroad company to ‎accommodate wide cars.‎",
                        "Was the sole manufacturer of the Pioneer.‎",
                    ],
                    "jawaban" => "Controlled the railroad tracks between ‎Detroid and Chicago.‎",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 50,
                    "soal" => "This passage would most likely be assigned in which of the following courses? ...........‎",
                    "pilihan" => [
                        "Enginering",
                        "Political Science",
                        "‎Finance",
                        "History",
                    ],
                    "jawaban" => "History",
                ]
            ],
        ];

        return $data;
    }

    public function get_soal_listeningv2(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b>SECTION 1</b></p>
                    <p><b>LISTENING COMPREHENSION</b></p>
                    <p><b>Time: Approximately 30 minutes 50 questions</b></p>
                    <p><b>PART A</b></p>
                    <p>In Part A , you will hear short conversations between two speakers. At the end of each conversation, a third voice will ask a question about what was said. The question will be spoken just one time. After you hear a conversation and the question about it, read the four possible anwers and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and mark your answer.</p>
                "
            ],
            [
                "tipe" => "audio",
                "data" => "v2 1-5.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "",
                    "pilihan" => [
                        "Mark is fond of rare meat.",
                        "Mark dislikes rare meat.",
                        "Mark is angry at the chef.",
                        "Mark doesn't want his meat cooked medium",
                    ],
                    "jawaban" => "Mark dislikes rare meat.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "",
                    "pilihan" => [
                        "The milk has turned bad.",
                        "The man doesn't like skim milk.",
                        "The man's check-cashing card has expired.",
                        "The milk may turn sour if they don't drink it within the next five days.",
                    ],
                    "jawaban" => "The milk has turned bad.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "",
                    "pilihan" => [
                        "He has other plans.",
                        "He thinks it will be frightening.",
                        "He has a bad personality.",
                        "He doesn't have enough time.",
                    ],
                    "jawaban" => "He thinks it will be frightening.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "",
                    "pilihan" => [
                        "It has been in her family a long time.",
                        "It is a family disgrace.",
                        "Her mother doesn't like it.",
                        "Her boyfriend gave it to her.",
                    ],
                    "jawaban" => "It has been in her family a long time.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "",
                    "pilihan" => [
                        "It was cleaned.",
                        "There was a roberry.",
                        "There was a large sale.",
                        "The employees had to work very late.",
                    ],
                    "jawaban" => "There was a roberry.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v2 6-10.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "",
                    "pilihan" => [
                        "She has good taste in clothes.",
                        "Her choice is not suitable for the occasion.",
                        "The skirt is pretty, but not the blouse.",
                        "It is too elegant.",
                    ],
                    "jawaban" => "Her choice is not suitable for the occasion.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "",
                    "pilihan" => [
                        "Jack didn't visit them.",
                        "They hope Jack will visit them.",
                        "Jack will not visit them because it's not on his way.",
                        "They are sure that Jack will visit them if he doesn't run out of time.",
                    ],
                    "jawaban" => "Jack will not visit them because it's not on his way.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "",
                    "pilihan" => [
                        "She'll count the votes on the proposal.",
                        "She'll support the man's proposal.",
                        "She'll make the proposal herself.",
                        "She'll back out of the proposal.",
                    ],
                    "jawaban" => "She'll support the man's proposal.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "",
                    "pilihan" => [
                        "At the jewelery store.",
                        "From a machine.",
                        "From the purchaser.",
                        "Down the hall.",
                    ],
                    "jawaban" => "From a machine.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "",
                    "pilihan" => [
                        "It will rain later.",
                        "The rain has already stopped.",
                        "It's probably not going to rain.",
                        "It's raining now, but will probably stop.",
                    ],
                    "jawaban" => "It's raining now, but will probably stop.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v2 11-15.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "",
                    "pilihan" => [
                        "The man should ask for advice.",
                        "The man should make an offer.",
                        "The man should not buy the house.",
                        "The man needs to make his own decision.",
                    ],
                    "jawaban" => "The man needs to make his own decision.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "",
                    "pilihan" => [
                        "Monday, Wednesday, and Friday.",
                        "Saturday and Sunday.",
                        "Tuesday, Thursday, and Sunday.",
                        "Monday, Friday, and Saturday.",
                    ],
                    "jawaban" => "Tuesday, Thursday, and Sunday.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "",
                    "pilihan" => [
                        "It was hard for her to learn so much material.",
                        "She learned the difficult extremes.",
                        "She wasn't able to materialize the difficulties.",
                        "She found the material after a difficult search.",
                    ],
                    "jawaban" => "It was hard for her to learn so much material.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "",
                    "pilihan" => [
                        "He studied because it was a nice day.",
                        "He didn't study because it was a very nice day.",
                        "He studied in spite of the beautiful weather.",
                        "He likes to study when the weather is nice.",
                    ],
                    "jawaban" => "He didn't study because it was a very nice day.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "",
                    "pilihan" => [
                        "She found a hard seat because the theater was dark.",
                        "She couldn't find a seat in the dark.",
                        "She had some difficulty finding a seat",
                        "She couldn't seat her friends.",
                    ],
                    "jawaban" => "She had some difficulty finding a seat",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v2 16-20.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "",
                    "pilihan" => [
                        "After the class had begun, some of the brazen students entered the room.",
                        "There were 24 students in the class after it had begun.",
                        "There were three dozen students in the class after it had begun.",
                        "The dozen people in the room were doubling as students.",
                    ],
                    "jawaban" => "There were 24 students in the class after it had begun.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "",
                    "pilihan" => [
                        "He expected the professor to contradict himself.",
                        "He had expected the professor to cancel the class.",
                        "He was contrary with the professor.",
                        "He hadn't expected the professor to cancel class, but he did.",
                    ],
                    "jawaban" => "He hadn't expected the professor to cancel class, but he did.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "",
                    "pilihan" => [
                        "In a bakery.",
                        "In a butcher shop.",
                        "In a pharmacy.",
                        "In an ice-cream store.",
                    ],
                    "jawaban" => "In a butcher shop.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "",
                    "pilihan" => [
                        "He won the trophy.",
                        "He broke his arm.",
                        "He's minister.",
                        "He sprained his ankle.",
                    ],
                    "jawaban" => "He sprained his ankle.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "",
                    "pilihan" => [
                        "In July.",
                        "In the winter.",
                        "In September.",
                        "In April.",
                    ],
                    "jawaban" => "In July.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v2 21-25.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "",
                    "pilihan" => [
                        "The speakers may cause Katie to be late.",
                        "She will be here shortly.",
                        "She probably forgot the appointment.",
                        "The speakers will probably be late if she doesn't arrive soon.",
                    ],
                    "jawaban" => "The speakers will probably be late if she doesn't arrive soon.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "",
                    "pilihan" => [
                        "Go to a party either Friday or Saturday night.",
                        "Go to a party if the weather is good.",
                        "Not go to a party because of the weather.",
                        "Go to a party on both Friday and Saturday nights.",
                    ],
                    "jawaban" => "Go to a party either Friday or Saturday night.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "",
                    "pilihan" => [
                        "Helen hates to eat fish.",
                        "Helen often fishes with her husband, but she doesn't like it.",
                        "Helen hates her husband after he has been fishing.",
                        "Helen likes to eat fish, but her husband likes to fish too much.",
                    ],
                    "jawaban" => "Helen often fishes with her husband, but she doesn't like it.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "",
                    "pilihan" => [
                        "Karl enjoys painting puzzles.",
                        "Karl was confused.",
                        "Karl's expression puzzled the woman.",
                        "Karl expressed the woman's face in a puzzle.",
                    ],
                    "jawaban" => "Karl's expression puzzled the woman.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "",
                    "pilihan" => [
                        "He must exhaust the runner.",
                        "He was probably very tired after running.",
                        "The rum made him sleepy.",
                        "He must run after the thief.",
                    ],
                    "jawaban" => "He was probably very tired after running.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v2 26-30.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "",
                    "pilihan" => [
                        "He can probably see her tomorrow afternoon.",
                        "He must pay his last bill if he wants to see her.",
                        "Tomorrow at noon she will see him.",
                        "She may see him now, but she'll be too busy tomorrow.",
                    ],
                    "jawaban" => "He can probably see her tomorrow afternoon.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "",
                    "pilihan" => [
                        "Sally has many friends although she has bad habits.",
                        "Bad people are avoided by Sally.",
                        "Sally's friends have very bad habits.",
                        "Sally has many friends although she has bad habits.",
                    ],
                    "jawaban" => "Sally has many friends although she has bad habits.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "",
                    "pilihan" => [
                        "The houses are too simple to cost so much.",
                        "It is easy to pay for a nice house.",
                        "They don't have enough money for a new house because of the high prices.",
                        "They can afford a new house now, but not next year.",
                    ],
                    "jawaban" => "They don't have enough money for a new house because of the high prices.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "",
                    "pilihan" => [
                        "Registration for the class is late.",
                        "It closes two days from now.",
                        "It closed two days ago.",
                        "It should have closed yesterday, but it will close in two days.",
                    ],
                    "jawaban" => "It closed two days ago.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "",
                    "pilihan" => [
                        "Their change in plans didn't affect her plans.",
                        "She didn't know that they had changed plans.",
                        "She didn't tell them when she changed plans.",
                        "She didn't know that they had changed the schedule of the planes.",
                    ],
                    "jawaban" => "She didn't know that they had changed plans.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b>PART B</b></p>
                    <p><b>DIRECTION</b></p>
                    <p>In Part B, you will hear longer conversation, after each conversation, you will be asked some question. The conversation and question will be spoken just one time. They will not be written out for you, so you will have to listen carefully in order to understand and remember what the speakers says.</p>
                    <p>When you hear a question, read the four possible answers in your test book and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and fill in the space that corresponds to the letter of the answer you have chosen.</p>
                "
            ],
            [
                "tipe" => "audio",
                "data" => "v2 31-34.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "",
                    "pilihan" => [
                        "He's lost his job as a chef.",
                        "He is overweight.",
                        "He hurt himself exercising.",
                        "He can't keep up with new trends.",
                    ],
                    "jawaban" => "He is overweight.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "",
                    "pilihan" => [
                        "Eat carbohydrates.",
                        "Stop eating dessert.",
                        "Do a breathing program.",
                        "Limit fats and keep working out in the gym.",
                    ],
                    "jawaban" => "Limit fats and keep working out in the gym.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "",
                    "pilihan" => [
                        "Eat yogurt.",
                        "Read a good book.",
                        "Take long walks.",
                        "Snack on low-fat vegetables.",
                    ],
                    "jawaban" => "Snack on low-fat vegetables.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "",
                    "pilihan" => [
                        "Take home leftovers from a salad bar.",
                        "Bring lunch from home.",
                        "Read books on dieting.",
                        "Skip lunch.",
                    ],
                    "jawaban" => "Bring lunch from home.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v2 35-38.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "",
                    "pilihan" => [
                        "Professor-student.",
                        "Co-authors of a book.",
                        "Librarian-researcher.",
                        "Biographer-book buyer.",
                    ],
                    "jawaban" => "Professor-student.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "",
                    "pilihan" => [
                        "France.",
                        "Mexico.",
                        "Spain.",
                        "Chile.",
                    ],
                    "jawaban" => "Chile.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "",
                    "pilihan" => [
                        "Painter.",
                        "World traveler.",
                        "Sociology professor.",
                        "Writer.",
                    ],
                    "jawaban" => "Writer.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => "",
                    "pilihan" => [
                        "Chile.",
                        "France.",
                        "Germany.",
                        "Canada.",
                    ],
                    "jawaban" => "Canada.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b>PART C</b></p>
                    <p><b>DIRECTION</b></p>
                    <p>In Part C, You will hear several talks. After each talk, you will be asked some questions. The talks and questions will be spoken just one time. They will not be written out for you, so you will have to listen carefully in order to understand and remember what the speaker says.</p>
                    <p>When you hear a question, read the four possible answers in your test book and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and fill in the space that corresponds to the letter of the answer you have choosen.</p>
                "
            ],
            [
                "tipe" => "audio",
                "data" => "v2 39-43.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "",
                    "pilihan" => [
                        "There was not much wind.",
                        "There was no way of controlling them.",
                        "It was hard to get off the ground.",
                        "They were too heavy.",
                    ],
                    "jawaban" => "There was no way of controlling them.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "",
                    "pilihan" => [
                        "Germany.",
                        "France.",
                        "England.",
                        "United States.",
                    ],
                    "jawaban" => "United States.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 41,
                    "soal" => "",
                    "pilihan" => [
                        "A French clockmaker.",
                        "Von Zeppelin.",
                        "A French count.",
                        "Blimp.",
                    ],
                    "jawaban" => "A French clockmaker.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 42,
                    "soal" => "",
                    "pilihan" => [
                        "Germany.",
                        "France.",
                        "England.",
                        "United States.",
                    ],
                    "jawaban" => "Germany.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 43,
                    "soal" => "",
                    "pilihan" => [
                        "The airships were used for wartime purposes.",
                        "They were difficult to control.",
                        "The newer models were too small.",
                        "They were afraid because of the tragedy of the Hindenberg.",
                    ],
                    "jawaban" => "They were afraid because of the tragedy of the Hindenberg.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v2 44-46.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 44,
                    "soal" => "",
                    "pilihan" => [
                        "Elephants.",
                        "Bears.",
                        "Tigers.",
                        "Rabbits.",
                    ],
                    "jawaban" => "Rabbits.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 45,
                    "soal" => "",
                    "pilihan" => [
                        "Butterflies.",
                        "Mice.",
                        "Turtles.",
                        "Spiders.",
                    ],
                    "jawaban" => "Turtles.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 46,
                    "soal" => "",
                    "pilihan" => [
                        "Fur.",
                        "Disease.",
                        "Speed.",
                        "Size.",
                    ],
                    "jawaban" => "Fur.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v2 47-50.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 47,
                    "soal" => "",
                    "pilihan" => [
                        "Beasts.",
                        "Herbivorous.",
                        "Dinosaurs.",
                        "Carnivorous.",
                    ],
                    "jawaban" => "Dinosaurs.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 48,
                    "soal" => "",
                    "pilihan" => [
                        "180 million years ago.",
                        "16 million years ago.",
                        "150 million years ago.",
                        "60 million years ago.",
                    ],
                    "jawaban" => "60 million years ago.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 49,
                    "soal" => "",
                    "pilihan" => [
                        "By excavating sites.",
                        "By observing them closely.",
                        "By living with them.",
                        "By reconstructing skeletons.",
                    ],
                    "jawaban" => "By reconstructing skeletons.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 50,
                    "soal" => "",
                    "pilihan" => [
                        "Scientists have studied them for centuries.",
                        "They were meat eating as well as plant eating.",
                        "They wandered the earth for millions of years.",
                        "They lived on land, in the sea, and in the sky.",
                    ],
                    "jawaban" => "Scientists have studied them for centuries.",
                ]
            ],
        ];

        return $data;
    }

    public function get_soal_structurev2(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b>SECTION 2</b></p>
                    <p><b>STRUCTURE AND WRITTEN EXPRESSION</b></p>
                    <p><b>Time: 25 minutes</b></p>
                    <p><b>40 questions</b></p>
                    <p><b>DIRECTIONS</b></p>
                    <p>Questions number 1-15 are incomplete sentences. Beneath each sentence you will see four words or phrases, marked (A), (B), (C), and (D). Choose the one word of phrase that best complets the sentence. Then, on your answer sheet, find the number of the question and fill in the space that corresponds to the letter of the answer you have chosen. Fill in the space so that the letter inside the oval cannot be seen.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "George did not do well in the class because ..................",
                    "pilihan" => [
                        "he failed to study properly.",
                        "he was not good studywise.",
                        "he was a badly student.",
                        "he studied bad.",
                    ],
                    "jawaban" => "he failed to study properly.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "This university's programs .................. those of Harvard.",
                    "pilihan" => [
                        "come second after",
                        "are first except for",
                        "are second only to",
                        "are in second place from",
                    ],
                    "jawaban" => "are second only to",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "The more she worked, ..................",
                    "pilihan" => [
                        "she achieved not enough.",
                        "the less she achieved.",
                        "she did not achieve enough.",
                        "she was achieving less.",
                    ],
                    "jawaban" => "the less she achieved.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "................. the best car to buy is a Mercedes Benz.",
                    "pilihan" => [
                        "Because of its durability and economy,",
                        "Because it lasts a long time, and it is very economical,",
                        "Because of its durability and it is economical,",
                        "Because durability and economywise it is better than all the others,",
                    ],
                    "jawaban" => "Because of its durability and economy,",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "When Henry arrived home after a hard day at work, ..................",
                    "pilihan" => [
                        "his wife has slept.",
                        "his wife slept.",
                        "his wife was sleeping.",
                        "his wife has been sleeping.",
                    ],
                    "jawaban" => "his wife was sleeping.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "He gave ..................",
                    "pilihan" => [
                        "to the class a tough assignment.",
                        "a tough assignment for the class.",
                        "the class a tough assignment.",
                        "an assignment very tough to the class.",
                    ],
                    "jawaban" => "the class a tough assignment.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "People all over the world are starving ..................",
                    "pilihan" => [
                        "greater in numbers",
                        "more numerously",
                        "in greater number",
                        "in more number",
                    ],
                    "jawaban" => "in greater number",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "It was until she arrived in class .................. realized she had forgotten her book",
                    "pilihan" => [
                        "and she",
                        "when she",
                        "that she",
                        "she",
                    ],
                    "jawaban" => "that she",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "John has not been able to recall where ..................",
                    "pilihan" => [
                        "she lives",
                        "does she live",
                        "did she live",
                        "lived the girl",
                    ],
                    "jawaban" => "she lives",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "Ben would have studied medicine if he .................. to a medical school",
                    "pilihan" => [
                        "had been admitted",
                        "could be able to enter",
                        "was admitted",
                        "were admitted",
                    ],
                    "jawaban" => "had been admitted",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "He entered the university ..................",
                    "pilihan" => [
                        "when he had sixteen years",
                        "at the age of sixteen",
                        "when sixteen years were his age",
                        "at age sixteen years old",
                    ],
                    "jawaban" => "at the age of sixteen",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "The jurors were told to ..................",
                    "pilihan" => [
                        "speak freely",
                        "talk all they wanted",
                        "talk with their minds open",
                        "make lots of experience",
                    ],
                    "jawaban" => "speak freely",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "Those students do not like to read novel,  .................. text books",
                    "pilihan" => [
                        "In any case",
                        "forgetting about",
                        "much less",
                        "leaving out the question",
                    ],
                    "jawaban" => "much less",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "He  .................. looked forward to the new venture",
                    "pilihan" => [
                        "eagerly",
                        "with great eagerness",
                        "eagernessly",
                        "in state of increasing eagerness",
                    ],
                    "jawaban" => "eagerly",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "The families told to evacuate their houses imediately  ..................",
                    "pilihan" => [
                        "at the time when the water began to go up",
                        "when up was going the water",
                        "when the water began to rise",
                        "in the time when the water raised",
                    ],
                    "jawaban" => "when the water began to rise",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center>PART B</center></p>
                    <p><center>DIRECTIONS</center></p>
                    <p>In questions 16-40 each sentences has four underlined words of phrases. The four underlined parts of the ‎sentence are marked (A), (B), (C), and (D). indentify the one underlined word of phrase that must be changed ‎in order for the sentence to be correct. Then, on your answer sheet, find the number of the question and fill in ‎the space that correspondends to the letter of the answer you have choosen.‎</p>",
            ],[
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "<u>Most</u> Americans would not be happy <u>without</u> <u>a</u> color television, two cars, and <u>working at</u> an extra job",
                    "pilihan" => [
                        "Most",
                        "without",
                        "a",
                        "working at",
                    ],
                    "jawaban" => "working at",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "<u>The</u> lion has <u>long</u> been <u>a</u> symbol of strength, power, and it <u>is very cruel</u>",
                    "pilihan" => [
                        "The",
                        "long",
                        "a",
                        "is very cruel",
                    ],
                    "jawaban" => "is very cruel",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "<u>All</u> the scouts got <u>thirselves</u> ready for <u>the</u> long camping trip by spending their weekends <u>living</u> in the open",
                    "pilihan" => [
                        "All",
                        "thirselves",
                        "the",
                        "living",
                    ],
                    "jawaban" => "thirselves",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "Nobody <u>had known</u> before <u>the</u> presentation that Sue and her sister <u>wil receive</u> <u>the</u> awards for outstanding scholarship",
                    "pilihan" => [
                        "had known",
                        "the",
                        "wil receive",
                        "the",
                    ],
                    "jawaban" => "wil receive",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "In 1927, Charles Lindbergh <u>was</u> the first <u>to fly</u> solo nonstop from New York to Paris <u>in</u> <u>such short time.</u>",
                    "pilihan" => [
                        "was",
                        "to fly",
                        "in",
                        "such short time.",
                    ],
                    "jawaban" => "such short time.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "<u>Until</u> his last class at the university in 1978, Bob always <u>turns</u> in all <u>of</u> his assignments <u>on</u> time",
                    "pilihan" => [
                        "Until",
                        "turns",
                        "of",
                        "on",
                    ],
                    "jawaban" => "turns",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "When I <u>last</u> show Janet, she <u>hurried</u> to her next class on <u>the other</u> side of the campus and <u>did not have</u> time to talk.",
                    "pilihan" => [
                        "last",
                        "hurried",
                        "the other",
                        "did not have",
                    ],
                    "jawaban" => "hurried",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "<u>Before we returned</u> from swiming in the river nearthe camp, someone <u>had stole</u> our clothes, and we had to walk <u>back</u> with our towels <u>around</u> us.",
                    "pilihan" => [
                        "Before we returned",
                        "had stole",
                        "back",
                        "around",
                    ],
                    "jawaban" => "had stole",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "Patrick was very late <u>getting home</u> last night, and unfortunately <u>for him</u>, the <u>dog</u> barking woke everyone <u>up</u>.",
                    "pilihan" => [
                        "getting home",
                        "for him",
                        "dog",
                        "up",
                    ],
                    "jawaban" => "dog",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "He <u>has been hoped</u> for a rise for the <u>last</u> four months, but his boss is reluctant <u>to give</u> him <u>one</u>",
                    "pilihan" => [
                        "has been hoped",
                        "last",
                        "to give",
                        "one",
                    ],
                    "jawaban" => "has been hoped",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "<u>After driving</u> for twenty miles, he suddenly <u>realized</u> that he <u>has been driving</u> <u>in</u> the wong direction.",
                    "pilihan" => [
                        "After driving",
                        "realized",
                        "has been driving",
                        "in",
                    ],
                    "jawaban" => "has been driving",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "<u>The</u> department of Foreign Languages <u>are</u> not located <u>in</u> the new building <u>opposite</u> the old one.",
                    "pilihan" => [
                        "The",
                        "are",
                        "in",
                        "opposite",
                    ],
                    "jawaban" => "are",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "The Nobel Prize winner, accompied <u>by</u> her husband and children, <u>are</u> staying in sweden <u>until</u> <u>after</u> the presentatation.",
                    "pilihan" => [
                        "by",
                        "are",
                        "until",
                        "after",
                    ],
                    "jawaban" => "are",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "Neither <u>of the</u> scout leaders <u>know</u> how to trap wild animals <u>or</u> how to prepare them <u>for mounting.</u>",
                    "pilihan" => [
                        "of the",
                        "know",
                        "or",
                        "for mounting.",
                    ],
                    "jawaban" => "know",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "<u>Those of</u> you who signed up <u>for</u> Dr. Daniel's anthropology class sould get <u>their</u> books as soon <u>as possible</u>",
                    "pilihan" => [
                        "Those of",
                        "for",
                        "their",
                        "as possible",
                    ],
                    "jawaban" => "their",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "I put my nes <u>books of Zoology</u> here on <u>the</u> desk a few minutes <u>ago</u>, but <u>I cannot seem to find it</u>.",
                    "pilihan" => [
                        "books of Zoology",
                        "the",
                        "ago",
                        "I cannot seem to find it",
                    ],
                    "jawaban" => "books of Zoology",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "<u>Marta</u> being <u>chosen</u> as the <u>most outstanding</u> student on her campus <u>made her parents</u> very happy.",
                    "pilihan" => [
                        "Marta",
                        "chosen",
                        "most outstanding",
                        "made her parents",
                    ],
                    "jawaban" => "Marta",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "Jane said she would <u>borrow</u> <u>me</u> her new movie camera if I <u>wanted</u> to use it <u>on my trip</u> to Europe.",
                    "pilihan" => [
                        "borrow",
                        "me",
                        "wanted",
                        "on my trip",
                    ],
                    "jawaban" => "borrow",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "<u>When Cliff was sick</u> with the flu, his mother made <u>him</u> <u>to eat</u> chicken soup and <u>rest</u> in bed.",
                    "pilihan" => [
                        "When Cliff was sick",
                        "him",
                        "to eat",
                        "rest",
                    ],
                    "jawaban" => "to eat",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "My cousin <u>composes not only</u> the music, <u>but</u> also sings <u>the songs for</u> the <u>major</u> Broadway musicals.",
                    "pilihan" => [
                        "composes not only",
                        "but",
                        "the songs for",
                        "major",
                    ],
                    "jawaban" => "composes not only",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "<u>The</u> geology professor showed <u>us</u> a sample <u>about</u> volcanic rock which dated <u>back</u> seven hundred years.",
                    "pilihan" => [
                        "The",
                        "us",
                        "about",
                        "back",
                    ],
                    "jawaban" => "about",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "<u>The</u> girl <u>whom</u> my cousin married <u>was used</u> to be a chorus girl for <u>the</u> Rockettes in Radio City Music Hall in New York.",
                    "pilihan" => [
                        "The",
                        "whom",
                        "was used",
                        "the",
                    ],
                    "jawaban" => "was used",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => "Ralph <u>has called</u> his lawyer last night <u>to tell</u> him about his problems, but was told <u>that</u> the lawyer <u>had gone</u> to a lecture.",
                    "pilihan" => [
                        "has called",
                        "to tell",
                        "that",
                        "had gone",
                    ],
                    "jawaban" => "has called",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "Some bumper stickers <u>are</u> very funny and make us <u>laugh</u>, yet <u>another</u> can make us angry because of their <u>ridiculousness</u>.",
                    "pilihan" => [
                        "are",
                        "laugh",
                        "another",
                        "ridiculousness",
                    ],
                    "jawaban" => "another",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "<u>The</u> results of the test proved <u>to</u> Fred and <u>me</u> that we needed to study harder and watch <u>less</u> movies on television if we wanted to receive scholarships.",
                    "pilihan" => [
                        "The",
                        "to",
                        "me",
                        "less",
                    ],
                    "jawaban" => "less",
                ]
            ],
        ];

        return $data;
    }

    public function get_soal_readingv2(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center>SECTION 3</center></p>
                    <p><center>READING COMPREHENSION</center></p>
                    <p><center>Time : 55 Minutes</center></p>
                    <p><center>50 Questions</center></p>
                    <p>DIRECTIONS</p>
                    <p>In this section, you will read a number of passages. Each one is followed by approximately ten questions about it. For 1-50, chose the one best answer, (A), (B), (C), and (D), to each question. Then, find the number of the question on your answer sheet, and fill in the space that corresponds to the letter of the answer you have choosen. Answer all of the questions following a passage on the basis of what is stated in that passage.</p>"
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><i><b>Questions 1 through 10 are based on the following reading passage.</b></i></p>
                    <p>The First Amendment to the American Constitution declares freedom of the press to all people. Although this right was not officially adopted until 1791, the famous Zenger trial of 1735 laid the groundwork for insuring this precious freedom.</p>
                    <p>John Peter Zenger emigrated as a teenager from Germany. In 1733, he began publishing the New York Weekly Journal. The following year, he was arrested for writing a story about the crown-appointed governor of New York. While Zenger was imprisoned for nine months, his wife <b>dutifully</b> published the newspaper every day, bravely telling the truth about the corrupt government officials sent by the king to govern the colonies.</p>
                    <p>Finally Zenger's long-awaited trial took place. The hostile judge dismissed Zenger's local lawyers, making it necessary for his wife to seek out Andrew Hamilton, a prominent Philadelphia lawyer. Persuaded by Hamilton the jury bravely returned a not-guilty verdict, <b>defying</b> the judge's orders for a conviction.</p>
                    <p>As a result of determination and bravery  on the part of the colonists, a lasting victory for freedom of the press was <b>gained</b> by a young immigrant.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "John Peter Zenger was a ...........",
                    "pilihan" => [
                        "corrupt governor of new york.",
                        "brave newspaper publisher.",
                        "famous lawyer.",
                        "hostile judge.",
                    ],
                    "jawaban" => "brave newspaper publisher.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "What political problem existed in the colonies at the time? ...........",
                    "pilihan" => [
                        "Lawyers were hostile to witnesses.",
                        "Government officials were corrupt.",
                        "All newspaper publishers were imprisoned.",
                        "Newspapers exaggerated the truth about the political officials.",
                    ],
                    "jawaban" => "Government officials were corrupt.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "How long did it take after the Zenger trial before the concept of freedom of the press was officially adopted? ...........",
                    "pilihan" => [
                        "9 months.",
                        "56 years.",
                        "58 years.",
                        "1 year.",
                    ],
                    "jawaban" => "56 years.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "All of the following are true EXCEPT ...........",
                    "pilihan" => [
                        "Andrew Hamilton encouraged the jury to fight for freedom.",
                        "Despite Zenger's imprisonment, his newspaper continued to be published.",
                        "The king controlled the colonies through his own appointed rulers.",
                        "The jury obeyed the judge's orders and convicted Zenger.",
                    ],
                    "jawaban" => "The jury obeyed the judge's orders and convicted Zenger.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "Why was Peter Zenger arrested? ...........",
                    "pilihan" => [
                        "He emigrated from Germany.",
                        "His wife published his newspaper for him.",
                        "He persuaded a jury to defy the judge's orders.",
                        "He wrote a story about the governor of New York.",
                    ],
                    "jawaban" => "He wrote a story about the governor of New York.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "It can be inferred that the judge was hostile toward Peter Zenger because the judge ...........",
                    "pilihan" => [
                        "Represented the ideas of the king.",
                        "Hated newspaper publishers.",
                        "Didn't like interference with the Constitution.",
                        "Had appointed the governor about whom zenger wrote",
                    ],
                    "jawaban" => "Represented the ideas of the king.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => 'The word "<b>defying</b>" in line in paragraph 3 is closest in meaning to ...........',
                    "pilihan" => [
                        "Altering",
                        "defecting",
                        "defending",
                        "disegarding",
                    ],
                    "jawaban" => "disegarding",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => 'The word "<b>dutifully</b>" in paragraph 2 is closest in meaning to ...........',
                    "pilihan" => [
                        "carelessly",
                        "Faitfully",
                        "unfortunately",
                        "defending",
                    ],
                    "jawaban" => "Faitfully",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "The main idea of this passage is ...........",
                    "pilihan" => [
                        "Andre Hamilton gave American freedom of the press",
                        "Judges don't always get juries to agree with them",
                        "Peter Zenger's persistent fight paved the way for freedom of the press",
                        "Peter Zenger's trial prepared the way for jurors to defy judge's orders",
                    ],
                    "jawaban" => "Peter Zenger's persistent fight paved the way for freedom of the press",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "What is the similar meaning of “<b>gained</b>”?",
                    "pilihan" => [
                        "Gone",
                        "Would",
                        "Got",
                        "Put",
                    ],
                    "jawaban" => "Got",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><i>Question 11 through 20 are based on the following passage</i></p>
                    <p>The period commonly known as the renaisance (1400-1600) began in Florence, Italy. It reprenseted a renewed interest in Greek and Roman art and Literature. The greatest achevements in art during this period were the perfection of depth perspective, use of colors, and effects of light and shadow. Artists across Europe improved on the ancient artists' techniques as no other period had done. The learned were studiying Greek and Roman to read the ancient literary classics there were many advances in science in technology, discoveries in the New World, and changes in religion. The growth of universities throughout Europe helped create a more educated middle class that was to take over runing the goverment within the following centuries. Europe had come out of the Dark Ages. This idea of rebirth in learning caracterized other epochs in history in different part of the world.</p>
                    <p>In A.D. 800, Charlemagne became king of the Franks and initiated the carolingian renaissance, which lasted until the end of ninth century. This period show beautiful and more modern cities patterned on Roman architecture. Charlemagne stimulated learning and the development of the art, sponsored a palace academy, established curriculum in schools for nobility, created libraries (a <b>carryover</b> from Alexandrian Egypt of 323 B.C.) and changed writing to an improved style of script.</p>
                    <p>Kieven Russia also enjoyed a century of rebirth some two hundred years later under the able rule of yaroslav the Wise. Like Charlemagne, he founded schools, established libraries, and brought about many architectural achievements.</p>
                "
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "Which was the earliest period of rebirth mentioned? ...........",
                    "pilihan" => [
                        "Russian",
                        "Italian",
                        "Roman",
                        "Carolingian",
                    ],
                    "jawaban" => "Carolingian",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "Which city did Charlemagne look upon as a model for his architectural improvement? ...........",
                    "pilihan" => [
                        "Kiev",
                        "Frank",
                        "Rome",
                        "Carolingian",
                    ],
                    "jawaban" => "Rome",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "All of the following are mentioned as characteristics of periods of renaissance EXCEPT ...........",
                    "pilihan" => [
                        "maintaining the status quo.",
                        "improved education.",
                        "architectural advances.",
                        "the creation of libraries.",
                    ],
                    "jawaban" => "maintaining the status quo.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "What can we assume about Yaroslav? ...........",
                    "pilihan" => [
                        "He was inept.",
                        "He was cruel.",
                        "He was demented.",
                        "He was a competent leader.",
                    ],
                    "jawaban" => "He was a competent leader.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => 'The word "<b>carryover</b>" in in paragraph 2 mean most nearly the same as ...........',
                    "pilihan" => [
                        "innovation	",
                        "barbarism",
                        "remnant",
                        "residue",
                    ],
                    "jawaban" => "remnant",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "According to the passage, what do all three periods have in commons? ...........",
                    "pilihan" => [
                        "An aversion to new libraries",
                        "A concern for education and learning",
                        "A desire for advanced science and technology",
                        "An interest in traveling trhoughout the world",
                    ],
                    "jawaban" => "A concern for education and learning",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => 'The word "<b>renaissance</b>" mean in the context of the these three civilization? ...........',
                    "pilihan" => [
                        "Helping to maintain Roman culture at any cost",
                        "Trying to do everything as the ancients had done",
                        "Improving on the basic principles of past cultures",
                        "Tearing down existing buildings and using Roman architectural techniques for new ones.",
                    ],
                    "jawaban" => "Improving on the basic principles of past cultures",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "Which of the renaissance periods lasted the longest? ...........",
                    "pilihan" => [
                        "Italian",
                        "Carolingian",
                        "Alexandrian",
                        "Kievan",
                    ],
                    "jawaban" => "Italian",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "Which renaissance had the most widespread and lasting effect on future generations ...........",
                    "pilihan" => [
                        "Italian",
                        "Kievan",
                        "Alexandrian",
                        "Carolingian",
                    ],
                    "jawaban" => "Italian",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "The main idea of this passage is that .........",
                    "pilihan" => [
                        "throughout history there has been a rebirth of idea and an effort to copy without creating anything new.",
                        "only western europe was interested in rebirth",
                        "the periods of rebirth saw greater advances for each culture",
                        "rebirth of a culture does not depend on outside influences",
                    ],
                    "jawaban" => "the periods of rebirth saw greater advances for each culture",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><i><b>Question 21 through 29 are based on the following passage</b></i></p>
                    <p>Gelatin is a protein substance that comes from the skins and bones of animals. Most people know it as the substance used to make a jellylike salad dessert. Not only is it useful in making these foods, but it is also beneficial to the cunsomer because of its high protein content. Galatin is also commonly used in the photographic industry and in making medical capsules.</p>
                    <p>The process for reducing gelatin is a long and complex one. In the processing of gelatin made from bones (which varies slightly from <b>that</b> of gelatin made from skin). The grease first must be eliminated. Then the bones are soaked in a solution of hydrochloric acid in order to rid them of minerals and washed several times in water. Next the bones are placed in distilled water, heated to over 90ºF for a few hours, placed in fresh distilled water, and the heated again at a little over 100ºF. A <b>fluid</b> forms from this heating, and it is concentrated, chilled, and sliced. Finally, it is dried and <b>ground</b>. In this final form, gelatin is white, tasteless, and odorless.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "It can be infered from this reading passage that ...........",
                    "pilihan" => [
                        "one could easily make gelatin at home",
                        "it is necessary to add minerals to the galatin",
                        "fat aids in making good gelatin",
                        "gelatin is useful for elderly ang ill people because it is easy to chew and high in protein",
                    ],
                    "jawaban" => "gelatin is useful for elderly ang ill people because it is easy to chew and high in protein",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => 'The word "<b>fluid</b>" in paragraph 2 is closest in meaning to ...........',
                    "pilihan" => [
                        "liquid",
                        "distilled water",
                        "hard mineral",
                        "substance",
                    ],
                    "jawaban" => "liquid",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "Which of the following is true? ...........",
                    "pilihan" => [
                        "Grease probrably does not aid in producing gelatin.",
                        "Gelatin made from skin is produced in the same way as that made from bones",
                        "The chemical used in making gelatin comes off ",
                        "The surface of the gelatin is dried, it is in powder form.",
                    ],
                    "jawaban" => "Grease probrably does not aid in producing gelatin.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "Which of the following would be the best title for this passage? ...........",
                    "pilihan" => [
                        "Protein Foods",
                        "Uses for bones",
                        "A great Dessert",
                        "The process of Making Gelatin",
                    ],
                    "jawaban" => "The process of Making Gelatin",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "All of the following industries are mentioned as using gelatin EXCEPT ...........",
                    "pilihan" => [
                        "the food industry",
                        "The photographic industry",
                        "The lawn care industry",
                        "The pharmaceutical industry",
                    ],
                    "jawaban" => "The lawn care industry",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "According to the passage, why is eating gelatin healthy? ...........",
                    "pilihan" => [
                        "It is protein rich.",
                        "It is low fat.",
                        "It has no animal byproducts",
                        "It does not damage the teeth.",
                    ],
                    "jawaban" => "It is protein rich.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => 'The word "<b>ground</b>" in paragraph 2 is closest in meaning to ...........',
                    "pilihan" => [
                        "regrigerated",
                        "pulverized",
                        "putrified",
                        "dirtied",
                    ],
                    "jawaban" => "pulverized",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "Why would gelatin be useful for medicine capsules? ...........",
                    "pilihan" => [
                        "It tastes good",
                        "It is natural substance that is easy to digest.",
                        "It is easy to make and thus inexpensive.",
                        "It won't melt at high temperatures",
                    ],
                    "jawaban" => "It is natural substance that is easy to digest.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => 'The word "<b>that</b>" in paragraph 2 refers to',
                    "pilihan" => [
                        "gelatin",
                        "skin",
                        "bones",
                        "processing",
                    ],
                    "jawaban" => "processing",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><i><b>Questions 30 through 41 are based on the following passage. ...........</b></i></p>
                    <p>In recent years, scientific and technological developments have drastically changed human life on our planet, was well as our views both of ourselves as individuals in society and of the universe as a whole. Perhaps one of the most <b>profound</b> developments of the 1970s was the discovery of recombinant DNA technology, which allows scientists to introduce genetic material (of genes) from one organism into another. In its simplest form, the technology requires the <b>isolation</b> of a piece of DNA, either directly from the DNA of the organism under study od <b>artificially</b> synthesize from an RNA template by using a viral enzyme called reverse transcriptase. This piece of DNA is then ligated to a <b>fragment</b> of bacterial DNA which has the <b>capacity</b> to <b>replicate</b> itself independently. The recombinant molecule those produced can be introduced into the common intestinal bacterium Escherichia coli, which can be grown in very large amounts in synthetic media. Under proper conditions, the foreign gene will not only replicate in the bacteria, but also express itself, through the process of transcription and translation,  to give rise to large amounts of the specific protein coded by the foreign gene.</p>
                    <p>The technology has already been succesfully applied to the production of several therapeutically important biomolecules, such as insulin; interferon, and growth hormones. Many other important applications are under detailed investigation laboratories throughout the world.</p>
                "
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "Recombinant DNA technology consist primarily of ...........",
                    "pilihan" => [
                        "giving rise to amounts of protein",
                        "using a viral enzyme called reverse transcriptase	",
                        "producing several therapeutically important biomolecules",
                        "introducing genetic material from one organizm into another",
                    ],
                    "jawaban" => "introducing genetic material from one organizm into another",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => 'The word "<b>profound</b>" in first paragraph  is closest in meaning to ...........',
                    "pilihan" => [
                        "boring",
                        "secret",
                        "dangerous",
                        "significant",
                    ],
                    "jawaban" => "significant",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => 'In first paragraph the word "<b>isolation</b>" is closest in meaning to" ...........',
                    "pilihan" => [
                        "duplication",
                        "destruction",
                        "study",
                        "segregation",
                    ],
                    "jawaban" => "segregation",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "Recombinant DNA technology has been used in the production of all of the following biomolecules EXCEPT ...........",
                    "pilihan" => [
                        "Escherichia coli",
                        "growth hormones",
                        "interferon",
                        "insulin",
                    ],
                    "jawaban" => "Escherichia coli",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => 'In paragraph 1, "<b>artificially</b>" is closest in meaning to ...........',
                    "pilihan" => [
                        "correctly",
                        "carefully",
                        "artistically",
                        "synthetically",
                    ],
                    "jawaban" => "synthetically",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => 'The word "<b>ligated</b>" in in first paragraph  is closest in meaning to ...........',
                    "pilihan" => [
                        "intersected",
                        "cut",
                        "bound",
                        "elevated",
                    ],
                    "jawaban" => "bound",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "Which of the following is NOT true ...........",
                    "pilihan" => [
                        "Recombinant DNA technology is a recent development.",
                        "Research continues in an effort to find other uses for this technology",
                        "The bacterium Eschericha coli can be grown in large amounts in synthetic media.",
                        "The foreign gene will replicate in the bacteria, but it will not express itself through transcription and translation.",
                    ],
                    "jawaban" => "The foreign gene will replicate in the bacteria, but it will not express itself through transcription and translation.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => 'In paragraph 1, the word "<b>fragment</b>" is nearest in meaning to ...........',
                    "pilihan" => [
                        "reproduction",
                        "particle",
                        "opposite",
                        "large piece",
                    ],
                    "jawaban" => "particle",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => 'The word "<b>capasity</b>" in paragraph 1 is nearest in meaning to ...........',
                    "pilihan" => [
                        "hormones",
                        "ability",
                        "technology",
                        "space",
                    ],
                    "jawaban" => "ability",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "Expression of a gene in Escherichia coli requires ...........",
                    "pilihan" => [
                        "the viral enzyme reverse transcriptase.",
                        "production of insulin and other biomolecules.",
                        "the processes of transcription and translation.",
                        "that the bacteria be grown in a synthetic media.",
                    ],
                    "jawaban" => "the processes of transcription and translation.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => 'The term "<b>recombinant</b>" is used because ...........',
                    "pilihan" => [
                        "escherichia coli is a recombinant organism",
                        "the technique requires the combination of several types of technology.",
                        "by ligation, a recombinant molecule is produced, which has the capacity of replication.",
                        "by ligation, a recombinant protein is produced; part of whole amino acids come from each different organism.",
                    ],
                    "jawaban" => "by ligation, a recombinant molecule is produced, which has the capacity of replication.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 41,
                    "soal" => 'The word "<b>replicate</b>" in paragraph 1 is closest in meaning to ...........',
                    "pilihan" => [
                        "join",
                        "reside",
                        "coexist",
                        "reproduce",
                    ],
                    "jawaban" => "reproduce",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><i><b>Questions 42 through 50 are based on the following passage.</b></i></p>
                    <p>Of the six outer planets, Mars, commonly called the Red Planed, is the closest to Earth. Mars, 4,200 miles in diameter and 55 percent of the size of Earth, is 34,600,000 miles from Earth, and 141,000,000 miles from the sun. It takes this planet, along with its two moons, Phobos and Deimos, 1.88 years to circle the Sun, compared to 365 days for the Earth.</p>
                    <p>For many years, Mars had been thought of as the planet with the man-made canals, <b>supposedly</b> discovered by an Italian astronomer, Schiaparelli, in 1877. With the United States spacecraft Viking I's landing on Mars in 1976, the man-made canal theory was proven to be only a <b>myth</b>.</p>
                    <p>Viking I, after landing on the soil of Mars, performed many scientific experiments and took numerous pictures. The pictures showed that  the red color of the planet is due to the reddish, rocky Martian soil. No biological life was found, though it had been speculated by many scientists. The Viking also <b>monitored</b> many weather changes including violent dust storms. Some water vapor, polar ice, and permafrost (frost below the surface) were found, indicating that at one time there were significant quantities of water on this distant planet. Evidence collected by the spacecraft shows some present volcanic action, though the volcanoes are believed to be dormant, if not extinct.</p>
                "
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 42,
                    "soal" => "All of the following are true EXCEPT ...........",
                    "pilihan" => [
                        "Mars has two moons.",
                        "Martian soil is rocky.",
                        "Mars is larger than Earth.",
                        "It takes longer for Mars to circle the sun than it takes Earth.",
                    ],
                    "jawaban" => "Mars is larger than Earth.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 43,
                    "soal" => "Man-made canals were supposedly discovered by ...........",
                    "pilihan" => [
                        "Viking I.",
                        "Phobos.",
                        "Martian.",
                        "Schiaparelli.",
                    ],
                    "jawaban" => "Schiaparelli.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 44,
                    "soal" => 'The word "<b>supposedly</b>" in paragraph 2 is closest in meaning to ...........',
                    "pilihan" => [
                        "actually.",
                        "formerly.",
                        "presumably.",
                        "unquestionably.",
                    ],
                    "jawaban" => "presumably.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 45,
                    "soal" => "Mars has been nicknamed ...........",
                    "pilihan" => [
                        "Viking I.",
                        "Deimos.",
                        "The Red Planet.",
                        "Martian.",
                    ],
                    "jawaban" => "The Red Planet.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 46,
                    "soal" => 'in paragraph 2, the word "<b>myth</b>" is closest in meaning to ...........',
                    "pilihan" => [
                        "fact.",
                        "event.",
                        "enigma.",
                        "legend.",
                    ],
                    "jawaban" => "legend.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 47,
                    "soal" => "The Viking I exploration accomplished all of the following EXCEPT ...........",
                    "pilihan" => [
                        "performing scientific experiments.",
                        "collecting information showing volcanic action.",
                        "monitoring weather conditions.",
                        "discovering large quantities of polar ice and permafrost.",
                    ],
                    "jawaban" => "discovering large quantities of polar ice and permafrost.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 48,
                    "soal" => "What is the main idea of this passage? ...........",
                    "pilihan" => [
                        "Scientists are only speculating about the Red Planed.",
                        "Very little of the Martian landscape has changed over the years.",
                        "Scientists are no longer interested in the planet because there is no life on it.",
                        "Fairly recent studies of this planet reveal data that contradict previously held theories.",
                    ],
                    "jawaban" => "Fairly recent studies of this planet reveal data that contradict previously held theories.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 49,
                    "soal" => 'The word "<b>monitored</b>" in paragraph 3 is nearest in meaning to ...........',
                    "pilihan" => [
                        "programmed.",
                        "observed.",
                        "censored.",
                        "televised.",
                    ],
                    "jawaban" => "observed.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 50,
                    "soal" => 'The word "<b>dormant</b>" in paragraph 3 is closest in meaning to ...........',
                    "pilihan" => [
                        "dangerous.",
                        "inactive.",
                        "erupting.",
                        "significant.",
                    ],
                    "jawaban" => "inactive.",
                ]
            ],
        ];

        return $data;
    }

    public function get_soal_listeningv3(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>SECTION 1</b></center></p>
                    <p><center><b>LISTENING COMPREHENSION</b></center></p>
                    <p><center><b></b></center></p>
                    <p><center><b>Time: Approximately 30 minutes 50 questions</b></center></p>"
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center>PART A</center></p>
                    <p><center>In Part A , you will hear short conversations between two speakers. At the end of each conversation, a third voice will ask a question about what was said. The question will be spoken just one time. After you hear a conversation and the question about it, read the four possible anwers and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and mark your answer.</center></p>"
            ],
            [
                "tipe" => "audio",
                "data" => "v3 1-5.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "",
                    "pilihan" => [
                        "Go to the movies with the man.",
                        "Take her brother to the movies.",
                        "Eat at her brother's.",
                        "Cook dinner with Lois.",
                    ],
                    "jawaban" => "Eat at her brother's.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "",
                    "pilihan" => [
                        "The man should have offered his assistance earlier.",
                        "She doesn't need the man's help.",
                        "She didn't realize the boxes were empty.",
                        "She wants the man to move the boxes.",
                    ],
                    "jawaban" => "She doesn't need the man's help.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "",
                    "pilihan" => [
                        "He'd like to have the windows open.",
                        "He rarely leaves the windows open.",
                        "He thinks the air is polluted.",
                        "He'll help her close the windows.",
                    ],
                    "jawaban" => "He'd like to have the windows open.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "",
                    "pilihan" => [
                        "The results might be ready tomorrow.",
                        "The man needs another test tomorrow.",
                        "The results were called in last night.",
                        "The doctor called the lab last night.",
                    ],
                    "jawaban" => "The results might be ready tomorrow.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "",
                    "pilihan" => [
                        "She doesn't remember much about Portland.",
                        "She's never been to Portland.",
                        "She knows someone else who could help him.",
                        "She'd be happy to talk to the man later.",
                    ],
                    "jawaban" => "She doesn't remember much about Portland.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v3 6-10.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "",
                    "pilihan" => [
                        "Turn down the volume.",
                        "Help the man study for a test.",
                        "Play a different kind of music",
                        "Speak louder.",
                    ],
                    "jawaban" => "Turn down the volume.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "",
                    "pilihan" => [
                        "She forgot when the report was due.",
                        "She'd like the man to help her with the report.",
                        "She needs more time to finish the report.",
                        "She hasn't included any data in her report.",
                    ],
                    "jawaban" => "She needs more time to finish the report.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "",
                    "pilihan" => [
                        "The cat is a lot of trouble.",
                        "The cat is quite friendly.",
                        "He doesn't gel along with Debbie.",
                        "He's glad Debbie gave him the cat.",
                    ],
                    "jawaban" => "The cat is a lot of trouble.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "",
                    "pilihan" => [
                        "Try to gel a seat next to the window.",
                        "Find another passenger going to Cleveland.",
                        "Ask for information about the departure time.",
                        "Find out if there are any seats led on the bus.",
                    ],
                    "jawaban" => "Ask for information about the departure time.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "",
                    "pilihan" => [
                        "She forgot to stop at the store.",
                        "The man shouldn't eat the fish.",
                        "The fish is safe to eat.",
                        "The food shouldn’t be reheated.",
                    ],
                    "jawaban" => "The man shouldn't eat the fish.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v3 11-15.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "",
                    "pilihan" => [
                        "She won't be able to go with the man.",
                        "She doesn't think Frank is arriving until tomorrow morning.",
                        "She has to pick up Frank at 2:00.",
                        "She doesn't know when her class will end.",
                    ],
                    "jawaban" => "She won't be able to go with the man.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "",
                    "pilihan" => [
                        "He watched the television program with his mother.",
                        "His mother told him his professor was on television.",
                        "Answering the phone caused him to miss the television program.",
                        "His mother missed the television program.",
                    ],
                    "jawaban" => "His mother told him his professor was on television.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "",
                    "pilihan" => [
                        "The pool will be open all week.",
                        "The weather will cool down soon.",
                        "The woman should go swimming.",
                        "He prefers to stay inside in hot weather.",
                    ],
                    "jawaban" => "The weather will cool down soon.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "",
                    "pilihan" => [
                        "He may not have enough time to cook.",
                        "He may spend more money on food next semester.",
                        "He may gain weight if he does his own cooking.",
                        "He may not enjoy cooking.",
                    ],
                    "jawaban" => "He may not have enough time to cook.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "",
                    "pilihan" => [
                        "He's tired.",
                        "He lost the race.",
                        "He has already been to the top of the hill.",
                        "He prefers doing exercise indoors.",
                    ],
                    "jawaban" => "He's tired.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v3 16-20.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "",
                    "pilihan" => [
                        "The doctor only has time on Tuesdays.",
                        "The doctor is busy on Tuesday morning.",
                        "The man must come more than one time.",
                        "The man must arrive on time.",
                    ],
                    "jawaban" => "The doctor is busy on Tuesday morning.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "",
                    "pilihan" => [
                        "Eat dinner at the cafeteria.",
                        "Find out when the cafeteria opens.",
                        "Meet her in the cafeteria this evening.",
                        "Try to get a job at the cafeteria.",
                    ],
                    "jawaban" => "Try to get a job at the cafeteria.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "",
                    "pilihan" => [
                        "Drive on through the night.",
                        "Check out of the motel.",
                        "Cancel their motel reservations.",
                        "Stop driving for the rest of the day.",
                    ],
                    "jawaban" => "Stop driving for the rest of the day.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "",
                    "pilihan" => [
                        "She doesn't want to take the course this semester.",
                        "She thought the class would be easy.",
                        "She will have thirteen credits after she completes the class.",
                        "She's surprised that all the sections are filled.",
                    ],
                    "jawaban" => "She's surprised that all the sections are filled.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "",
                    "pilihan" => [
                        "She doesn't like to drink coffee.",
                        "She's not upset by the accident.",
                        "The man should apologize.",
                        "The man has spilled coffee on her before.",
                    ],
                    "jawaban" => "The man should apologize.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v3 21-25.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "",
                    "pilihan" => [
                        "The man will have to buy a new shirt.",
                        "The shirt looks just like the man's new one.",
                        "The shirt can be repaired easily.",
                        "The man shouldn't put sharp objects in his shirt pocket.",
                    ],
                    "jawaban" => "The shirt can be repaired easily.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "",
                    "pilihan" => [
                        "The jackets sold out quickly.",
                        "The sale ended yesterday.",
                        "He'll check with the sales clerk.",
                        "The woman might find a jacket on sale.",
                    ],
                    "jawaban" => "The woman might find a jacket on sale.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "",
                    "pilihan" => [
                        "She likes to drive when she travels.",
                        "She doesn't want to go to Chicago.",
                        "She doesn't know how much the train trip will cost.",
                        "It's cheaper to go to Chicago by car.",
                    ],
                    "jawaban" => "It's cheaper to go to Chicago by car.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "",
                    "pilihan" => [
                        "The man paid a lot to join the gym.",
                        "The man has been working too hard.",
                        "The man has improved his physical condition.",
                        "The man should ask for more pay.",
                    ],
                    "jawaban" => "The man has improved his physical condition.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "",
                    "pilihan" => [
                        "She prefers hot weather.",
                        "The man should visit Washington when it's cooler.",
                        "She agrees that going to the beach would have been better.",
                        "Visiting Washington is enjoyable despite the heat.",
                    ],
                    "jawaban" => "Visiting Washington is enjoyable despite the heat.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v3 26-30.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "",
                    "pilihan" => [
                        "She'll help the man clean up the spill.",
                        "Timmy should be more careful.",
                        "The man should be more understanding.",
                        "Timmy isn't well behaved for his age.",
                    ],
                    "jawaban" => "The man should be more understanding.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "",
                    "pilihan" => [
                        "He can meet the woman on Wednesday.",
                        "He won't be ready until next week.",
                        "He's available any day except Wednesday.",
                        "He needs to do the history project before Wednesday.",
                    ],
                    "jawaban" => "He's available any day except Wednesday.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "",
                    "pilihan" => [
                        "Go to a field hockey practice.",
                        "Try out for the Held hockey team.",
                        "Get tickets to see the championship game.",
                        "Receive an award for winning a championship.",
                    ],
                    "jawaban" => "Go to a field hockey practice.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "",
                    "pilihan" => [
                        "She wants to check the weather before deciding.",
                        "She has a problem with her hearing.",
                        "She'd enjoy coming to dinner another time.",
                        "She wants the man to help her with some work.",
                    ],
                    "jawaban" => "She'd enjoy coming to dinner another time.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "",
                    "pilihan" => [
                        "The back of the drawer has fallen off.",
                        "The man doesn't have any soap.",
                        "The cabinet is too heavy to move.",
                        "Something is blocking the back of the drawer.",
                    ],
                    "jawaban" => "Something is blocking the back of the drawer.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center>PART B</center></p?
                    <p><center>DIRECTION</center></p?
                    <p>In Part B, you will hear longer conversation, after each conversation, you will be asked some question. The conversation and question will be spoken just one time. They will not be written out for you, so you will have to listen carefully in order to understand and remember what the speakers says.</p>
                    <p>When you hear a question, read the four possible answers in your test book and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and fill in the space that corresponds to the letter of the answer you have chosen.</p>"
            ],
            [
                "tipe" => "audio",
                "data" => "v3 31-34.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "",
                    "pilihan" => [
                        "There aren't enough cabinets.",
                        "There is too much noise.",
                        "Office supplies are taking up space.",
                        "Some teaching assistants don't have desks.",
                    ],
                    "jawaban" => "There is too much noise.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "",
                    "pilihan" => [
                        "To chat with Jack socially.",
                        "To get help in the course.",
                        "To hand in their assignments.",
                        "To practice giving interviews.",
                    ],
                    "jawaban" => "To get help in the course.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "",
                    "pilihan" => [
                        "Give Jack a different office.",
                        "Complain to the department head.",
                        "Move the supplies to the storage room.",
                        "Try to get a room to use for meetings.",
                    ],
                    "jawaban" => "Try to get a room to use for meetings.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "",
                    "pilihan" => [
                        "They'd have to get permission.",
                        "Jack wouldn't like it.",
                        "She thinks it might work.",
                        "The other assistants should be consulted.",
                    ],
                    "jawaban" => "She thinks it might work.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v3 35-38.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "",
                    "pilihan" => [
                        "Mating habits or squid and octopus.",
                        "The evolution of certain forms of sea life.",
                        "The study of marine shells.",
                        "Survival skills of sea creatures.",
                    ],
                    "jawaban" => "The evolution of certain forms of sea life.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "",
                    "pilihan" => [
                        "He didn't understand the lecture.",
                        "He wants to borrow her notes next week.",
                        "He needs help with a makeup exam.",
                        "He was sick and unable to attend.",
                    ],
                    "jawaban" => "He was sick and unable to attend.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "",
                    "pilihan" => [
                        "Some sea creatures developed vertebrae.",
                        "The first giant squid was captured.",
                        "Some sea creatures shed their shells.",
                        "Sea life became more intelligent.",
                    ],
                    "jawaban" => "The first giant squid was captured.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => "",
                    "pilihan" => [
                        "She has always believed they exist.",
                        "She heard about them in New Zealand.",
                        "Stories about them may be based on giant squid.",
                        "The instructor mentioned them in the lecture.",
                    ],
                    "jawaban" => "She heard about them in New Zealand.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>PART C</b></center></p>
                    <p><center><b>DIRECTION</b></center></p>
                    <p>In Part C, You will hear several talks. After each talk, you will be asked some questions. The talks and questions will be spoken just one time. They will not be written out for you, so you will have to listen carefully in order to understand and remember what the speaker says.</p>
                    <p>When you hear a question, read the four possible answers in your test book and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and fill in the space that corresponds to the letter of the answer you have choosen.</p>"
            ],
            [
                "tipe" => "audio",
                "data" => "v3 39-42.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "",
                    "pilihan" => [
                        "To explain a new requirement for graduation.",
                        "To interest students in a community service project.",
                        "To discuss the problems of elementary school students.",
                        "To recruit elementary school teachers for a special program.",
                    ],
                    "jawaban" => "To recruit elementary school teachers for a special program.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "",
                    "pilihan" => [
                        "To Find jobs for graduating students.",
                        "To help education majors prepare for final exams.",
                        "To offer tutorials to elementary school students.",
                        "To provide funding for a community service project.",
                    ],
                    "jawaban" => "To offer tutorials to elementary school students.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 41,
                    "soal" => "",
                    "pilihan" => [
                        "He advises students participating in a special program.",
                        "He teaches part-time in an elementary school.",
                        "He observes elementary school students in the classroom.",
                        "He helps students prepare their resumes.",
                    ],
                    "jawaban" => "He advises students participating in a special program.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 42,
                    "soal" => "",
                    "pilihan" => [
                        "Contact the elementary school.",
                        "Sign up for a special class.",
                        "Submit a resume to the dean.",
                        "Talk to Professor Dodge.",
                    ],
                    "jawaban" => "Talk to Professor Dodge.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v3 43-46.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 43,
                    "soal" => "",
                    "pilihan" => [
                        "To prepare students for the next reading assignment.",
                        "To provide background information for a class discussion.",
                        "To review material from a previous lesson.",
                        "To prepare for a quiz on chapter six.",
                    ],
                    "jawaban" => "To provide background information for a class discussion.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 44,
                    "soal" => "",
                    "pilihan" => [
                        "Insurance companies.",
                        "Sailors.",
                        "Manufacturers.",
                        "Merchants.",
                    ],
                    "jawaban" => "Merchants.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 45,
                    "soal" => "",
                    "pilihan" => [
                        "The distance the merchandise had to be shipped.",
                        "The number of insurance companies available at the time.",
                        "The amount of danger involved in shipping the goods.",
                        "The type of vessel used to transport the goods.",
                    ],
                    "jawaban" => "The amount of danger involved in shipping the goods.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 46,
                    "soal" => "",
                    "pilihan" => [
                        "Only four types of policies still exist today.",
                        "They are cheaper than the ones in the Middle Ages.",
                        "They include features similar to earlier policies.",
                        "The interest rates are based on early methods of calculation.",
                    ],
                    "jawaban" => "They include features similar to earlier policies.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v3 47-50.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 47,
                    "soal" => "",
                    "pilihan" => [
                        "The oxygen level in the water.",
                        "The angle of the treadmill.",
                        "The weights on the divers.",
                        "The temperature of the water.",
                    ],
                    "jawaban" => "The weights on the divers.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 48,
                    "soal" => "",
                    "pilihan" => [
                        "Walking on Mars will be easier than walking on the Moon.",
                        "There is more gravity on the Moon than on Mars.",
                        "Walking quickly will be difficult on Mars.",
                        "Astronauts on Mars will require more oxygen than will astronauts on the Moon.",
                    ],
                    "jawaban" => "Walking on Mars will be easier than walking on the Moon.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 49,
                    "soal" => "",
                    "pilihan" => [
                        "They look short, quick steps.",
                        "They were pulled off of the treadmill.",
                        "They lost their balance.",
                        "hey look longer, coordinated steps.",
                    ],
                    "jawaban" => "hey look longer, coordinated steps.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 50,
                    "soal" => "",
                    "pilihan" => [
                        "Martian suits will have larger air tanks.",
                        "Martian suits will be equipped with special weights.",
                        "Martian suits will be more flexible.",
                        "Martian suits will be less durable.",
                    ],
                    "jawaban" => "Martian suits will be more flexible.",
                ]
            ],
        ];

        return $data;
    }
    
    public function get_soal_structurev3(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center>SECTION 2</center></p>
                    <p><center>STRUCTURE AND WRITTEN EXPRESSION</center></p>
                    <p><center>Time: 30 minutes</center></p>
                    <p><center>40 questions</center></p>"
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>DIRECTIONS</p>
                    <p>Questions number 1-15 are incomplete sentences. Beneath each sentence you will see four words or phrases, marked (A), (B), (C), and (D). Choose the one word of phrase that best complets the sentence. Then, on your answer sheet, find the number of the question and fill in the space that corresponds to the letter of the answer you have chosen. Fill in the space so that the letter inside the oval cannot be seen.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "The ponderosa pine is ....... of the most of the timber used by forest- product firms in the Black Hills of South Dakota.",
                    "pilihan" => [
                        "The source",
                        "As source",
                        "The source which",
                        "Because the source",
                    ],
                    "jawaban" => "The source",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "Computers that once took up entire rooms are now ....... to put on desktops and into wristwatches.",
                    "pilihan" => [
                        "Small enough",
                        "Smaller than",
                        "So small",
                        "As small as",
                    ],
                    "jawaban" => "Small enough",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "According to some educators, the goal of teaching is to help students learn what ....... to know to live a well-adjusted and successful life. ",
                    "pilihan" => [
                        "Do they need",
                        "They need",
                        "They are needed",
                        "As they may need",
                    ],
                    "jawaban" => "They need",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "The sapphire’ s transparency to ultraviolet and infrared radiation makes ....... in optical instruments.",
                    "pilihan" => [
                        "It is of use",
                        "It uses",
                        "It a useful",
                        "It useful",
                    ],
                    "jawaban" => "It useful",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "....... initial recognition while still quite young.",
                    "pilihan" => [
                        "Most famous scientists achieve ",
                        "That most famous scientists achieved",
                        "Most famous scientists who achieved",
                        "For most famous scientists to achieve",
                    ],
                    "jawaban" => "Most famous scientists achieve ",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "Mango trees, ....... densely covered with glossy leaves and bear small fragrant flowers, grow rapidly and can attain heights of up to 90 feet.",
                    "pilihan" => [
                        "whose",
                        "which are",
                        "are when",
                        "Which",
                    ],
                    "jawaban" => "which are",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => " ....... the Canadian composer Barbara Pentland wrote four symphonies, three concertos, and an opera, among other works.",
                    "pilihan" => [
                        "An artist who, prolific",
                        "Is a prolific artist",
                        "Prolific an artist",
                        "A prolific artist",
                    ],
                    "jawaban" => "A prolific artist",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "The Chisos Mountains in Big Bend National park in Texas were created by volcanic eruptions that occurred ........",
                    "pilihan" => [
                        "The area in which dinosaurs roamed",
                        "When dinosaurs roamed the area",
                        "Did dinosaurs roam the area",
                        "Dinosaurs roaming the area",
                    ],
                    "jawaban" => "When dinosaurs roamed the area",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "In bas-relief sculpture, a design projects very slightly from its background, ....... some coins.",
                    "pilihan" => [
                        "As on",
                        "Because",
                        "The way that",
                        "Similarly",
                    ],
                    "jawaban" => "As on",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "Alaska found the first years of its statehood costly because it had to take over the expense of services ....... previously by the federal government.",
                    "pilihan" => [
                        "To provide",
                        "Be provided",
                        "Providing",
                        "Provided",
                    ],
                    "jawaban" => "Provided",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "With age, the mineral content of human bones decreases, ....... them more fragile.",
                    "pilihan" => [
                        "Make",
                        "And to make",
                        "Thereby making",
                        "Which it makes",
                    ],
                    "jawaban" => "Thereby making",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "Not until Kentucky’ s Mammoth Cave had been completely explored in 1972.",
                    "pilihan" => [
                        "When was its full extent realized",
                        "That its full extent was realized",
                        "Was its full extent realized",
                        "The realization of its full extent",
                    ],
                    "jawaban" => "Was its full extent realized",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "The first explorer ....... California by land was Jedediah Strong Smith, a trapper who crossed the southwestern deserts of the United States in 1826. ",
                    "pilihan" => [
                        "That he reached",
                        "Reached",
                        "To reach",
                        "Reaching it",
                    ],
                    "jawaban" => "To reach",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "Written to be performed on a ......., Thornton Wilder’ s play Our Town depicts life in a small New England community.",
                    "pilihan" => [
                        "Stage scenery of bare",
                        "Bare of stage scenery",
                        "Scenery bare of stage",
                        "Stage bare of scenery",
                    ],
                    "jawaban" => "Stage bare of scenery",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "....... many copper mines in the state of Arizona, a fact which contributes significantly to the state’ s economy.",
                    "pilihan" => [
                        "They are",
                        "There are",
                        "Of the",
                        "The",
                    ],
                    "jawaban" => "There are",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "Margaret Mead <u>studied</u> many <u>different</u> cultures and she was one <u>of the first</u> anthropologists to photograph <u>hers</u> subjects.",
                    "pilihan" => [
                        "studied",
                        "different",
                        "of the first",
                        "hers",
                    ],
                    "jawaban" => "hers",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "Talc, <u>a</u> soft mineral with a <u>variety</u> of uses, <u>sold is</u> in slabs or in powdered <u>form</u>. ",
                    "pilihan" => [
                        "a",
                        "variety",
                        "sold is",
                        "form",
                    ],
                    "jawaban" => "sold is",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "<u>During</u> the 1870’ s iron workers in Alabama proved they <u>could</u> produce iron by <u>burning</u> iron ore with coke, <u>instead</u> than with charcoal. ",
                    "pilihan" => [
                        "During",
                        "could",
                        "burning",
                        "instead",
                    ],
                    "jawaban" => "instead",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "<u>Geologists</u> at the Hawaiian Volcano Observatory <u>rely</u> on <u>a number</u> of instruments <u>to studying</u> the volcanoes in Hawaii. ",
                    "pilihan" => [
                        "Geologists",
                        "rely",
                        "a number",
                        "to studying",
                    ],
                    "jawaban" => "to studying",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "Underlying aerodynamics and <u>all</u> other <u>branches</u> of theoretical mechanics <u>are</u> the laws of motion <u>who</u> were developed in the seventeenth century. ",
                    "pilihan" => [
                        "all",
                        "branches",
                        "are",
                        "who",
                    ],
                    "jawaban" => "who",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "<u>Was opened</u> in 1918, the Philips Collection <u>in</u> Washington, D.C., was the first museum in the United States <u>devoted</u> to modern <u>art</u>. ",
                    "pilihan" => [
                        "Was opened",
                        "in",
                        "devoted",
                        "art",
                    ],
                    "jawaban" => "Was opened",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "A mortgage <u>enables</u> a person <u>to buy</u> property <u>without</u> paying for it outright; thus more people are able to enjoy <u>to own</u> a house.",
                    "pilihan" => [
                        "enables",
                        "to buy",
                        "without",
                        "to own",
                    ],
                    "jawaban" => "to own",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "<u>Alike</u> ethnographers, ethnohistorians <u>make</u> systemic observations, but they <u>also</u> gather data from documentary and oral <u>sources</u>. ",
                    "pilihan" => [
                        "Alike",
                        "make",
                        "also",
                        "sources",
                    ],
                    "jawaban" => "Alike",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "Basal body temperature <u>refers</u> to the <u>most lowest</u> temperature of a <u>healthy</u> individual <u>during</u> waking hours. ",
                    "pilihan" => [
                        "refers",
                        "most lowest",
                        "healthy",
                        "during",
                    ],
                    "jawaban" => "most lowest",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "<u>Research</u> in the United States on acupuncture <u>has focused</u> on <u>it</u> use in <u>pain relief</u> and anesthesia.",
                    "pilihan" => [
                        "Research",
                        "has focused",
                        "it",
                        "pain relief",
                    ],
                    "jawaban" => "it",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "The Moon’ s <u>gravitational</u> field <u>cannot</u> keep atmospheric gases <u>from escape</u> into <u>space</u>. ",
                    "pilihan" => [
                        "gravitational",
                        "cannot",
                        "from escape",
                        "space",
                    ],
                    "jawaban" => "from escape",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "<u>Although</u> the pecan tree is chiefly <u>value</u> for its fruit, its wood <u>is used</u> extensively <u>for</u> flooring, furniture, boxes, and crates. ",
                    "pilihan" => [
                        "Although",
                        "value",
                        "is used",
                        "for",
                    ],
                    "jawaban" => "value",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "<u>Born</u> in Texas in 1890, Katherine Anne Porter produced three <u>collection</u> of short <u>stories</u> before <u>publishing</u> her well-known novel <i>Ship of Fools</i> in 1962. ",
                    "pilihan" => [
                        "Born",
                        "collection",
                        "stories",
                        "publishing",
                    ],
                    "jawaban" => "collection",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "Insulation from cold, <u>protect</u> against dust and <u>sand</u>, and camouflage <u>are</u> among the <u>functions</u> of hair for animals. ",
                    "pilihan" => [
                        "protect",
                        "sand",
                        "are",
                        "functions",
                    ],
                    "jawaban" => "protect",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "The notion <u>that</u> students are not sufficiently involved in their education is <u>one reason</u> for the <u>recently</u> surge of <u>support</u> for undergraduate research. ",
                    "pilihan" => [
                        "that",
                        "one reason",
                        "recently",
                        "support",
                    ],
                    "jawaban" => "recently",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "<u>As</u> secretary of transportation from 1975 to 1977, William Coleman worked <u>to help</u> the bankrupt railroads in the northeastern United States <u>solved</u> their <u>financial</u> problems.",
                    "pilihan" => [
                        "As",
                        "to help",
                        "solved",
                        "financial",
                    ],
                    "jawaban" => "solved",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "Faults in the Earth’ s crust are most evidently <u>in</u> sedimentary formations, <u>where</u> they <u>interrupt</u> <u>previously</u> continuous layers. ",
                    "pilihan" => [
                        "in",
                        "where",
                        "interrupt",
                        "previously",
                    ],
                    "jawaban" => "in",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "Many <u>flowering</u> plants benefit <u>of</u> pollination by <u>adult</u> butterflies <u>and</u> moths. ",
                    "pilihan" => [
                        "flowering",
                        "of",
                        "adult",
                        "and",
                    ],
                    "jawaban" => "of",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "A number <u>of</u> the American Indian languages <u>spoken</u> at the <u>time</u> of the European arrival in the New World in the late <u>fifteen</u> century have become extinct.",
                    "pilihan" => [
                        "of",
                        "spoken",
                        "time",
                        "fifteen",
                    ],
                    "jawaban" => "fifteen",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "George Gershwin was an American composer <u>whose</u> concert <u>works joined</u> the sounds of jazz <u>with</u> <u>them</u> of traditional orchestration. ",
                    "pilihan" => [
                        "whose",
                        "works joined",
                        "with",
                        "them",
                    ],
                    "jawaban" => "them",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "<u>One of the problems</u> of United States agriculture that has persisted <u>during the</u> 1920’ s until the present day is the tendency of farm income to lag <u>behind</u> the costs of <u>production</u>. ",
                    "pilihan" => [
                        "One of the problems",
                        "during the",
                        "behind",
                        "production",
                    ],
                    "jawaban" => "during the",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "Volcanism <u>occurs</u> on Earth in several geological <u>setting</u>, most of which are associated with the boundaries of the <u>enormous</u>, rigid plates that <u>make up</u> the lithosphere. ",
                    "pilihan" => [
                        "occurs",
                        "setting",
                        "enormous",
                        "make up",
                    ],
                    "jawaban" => "setting",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => "Early European settlers in North America <u>used</u> medicines <u>they</u> made from <u>plants native</u> to treat colds, pneumonia, and ague, <u>an</u> illness similar to malaria. ",
                    "pilihan" => [
                        "used",
                        "they",
                        "plants native",
                        "an",
                    ],
                    "jawaban" => "plants native",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "<u>Some insects</u> bear a remarkable resemblance to dead twigs, <u>being</u> long, <u>slenderness</u>, wingless, and brownish <u>in color</u>. ",
                    "pilihan" => [
                        "Some insects",
                        "being",
                        "slenderness",
                        "in color",
                    ],
                    "jawaban" => "slenderness",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "A food <u>additive</u> is <u>any chemical</u> that food manufacturers <u>intentional</u> add to their <u>products</u>.",
                    "pilihan" => [
                        "additive",
                        "any chemical",
                        "intentional",
                        "products",
                    ],
                    "jawaban" => "intentional",
                ]
            ],
        ];

        return $data;
    }

    public function get_soal_readingv3(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>SECTION 3</b></center></p>
                    <p><center><b>READING COMPREHENSION</b></center></p>
                    <p><center><b>Time : 60 Minutes</b></center></p>
                    <p><center><b>50 Questions</b></center></p>"
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>DIRECTIONS</p>
                    <p>In this section, you will read a number of passages. Each one is followed by approximately ten questions about it. For 1-50, chose the one best answer, (A), (B), (C), and (D), to each question. Then, find the number of the question on your answer sheet, and fill in the space that corresponds to the letter of the answer you have choosen. Answer all of the questions following a passage on the basis of what is stated in that passage.</p>"
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b>Question 1- 8</b></p>
                    <p>With Robert Laurent and William Zorach, direct carving enters into the story of modem sculpture in the United States. Direct carving – in which the sculptors themselves carve stone or wood with mallet and chisel – must be recognized as something more than just a technique. Implicit in it is an aesthetic principle as well: that the <b>(1) medium</b> has certain qualities of beauty and expressiveness with which sculptors must bring their own aesthetic sensibilities into harmony. For example, sometimes the shape or veining in a piece of stone or wood suggests, perhaps even <b>(3) dictates</b>, not only the ultimate form, but even the subject matter. The technique of direct carving was a break with the nineteenth-century tradition in which the making of a clay model was considered the creative act and the work was then turned over to studio assistants to be cast in plaster or bronze or carved in marble. Neoclassical sculptors seldom held a mallet or chisel in their own hands, readily conceding that the assistants they employed were far better than they were at carving the finished marble.</p>
                    <p>With the turn-of-the-century Crafts movement and the discovery of nontraditional sources of inspiration, such as wooden African figures and masks, there arose a new urge for hands-on, personal execution of art and an interaction with the medium. Even as early as the 1880's and 1890's, nonconformist European artists were attempting direct carving. By the second decade of the twentieth century, Americans – Laurent and Zorach most notably - had adopted it as their primary means of working.</p>
                    <p>Born in France, Robert Laurent (1890-197Q) was a prodigy who received his education in the United States. In 1905 he was sent to Paris as an apprentice to an art dealer, and in the years that followed he <b>(5) witnessed</b> the birth of Cubism, discovered primitive art, and learned the techniques of woodcarving from a frame maker. Back in New York City by 1910, Laurent began carving pieces such as The Priestess, which reveals his fascination with African, pre-Columbian, and South Pacific art. Taking a walnut plank, the sculptor carved the expressive, stylized design. It is one of the earliest examples of direct carving in American sculpture. The plank's form dictated the rigidly frontal view and the low relief. Even its irregular shape must have appealed to Laurent as <b>(7) a break with</b> a long-standing tradition that required a sculptor to work within a perfect rectangle or square.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => 'The word "medium" in the text could be used to refer to',
                    "pilihan" => [
                        "Stone or wood",
                        "Mallet and chisel",
                        "Technique",
                        "Principle",
                    ],
                    "jawaban" => "Stone or wood",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "What is one of the fundamental principles of direct carving?",
                    "pilihan" => [
                        "A sculptor must work with talented assistants.",
                        "The subject of a sculpture should be derived from classical stories.",
                        "The material is an important element in a sculpture.",
                        "Designing a sculpture is a more creative activity than carving it.",
                    ],
                    "jawaban" => "The material is an important element in a sculpture.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => 'The word "dictates" in the text is closest in meaning to',
                    "pilihan" => [
                        "Reads aloud",
                        "Determines",
                        "Includes",
                        "Records",
                    ],
                    "jawaban" => "Determines",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "How does direct carving differ from the nineteenth-century tradition of sculpture?",
                    "pilihan" => [
                        "Sculptors are personally involved in the carving of a piece.",
                        "Sculptors find their inspiration in neoclassical sources.",
                        "Sculptors have replaced the mallet and chisel with other tools.",
                        "Sculptors receive more formal training.",
                    ],
                    "jawaban" => "Sculptors are personally involved in the carving of a piece.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => 'The word "witnessed" in the text is closest in meaning to',
                    "pilihan" => [
                        "Influenced",
                        "Studied",
                        "Validated",
                        "Observed",
                    ],
                    "jawaban" => "Observed",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "Where did Robert Laurent learn to carve?",
                    "pilihan" => [
                        "New York",
                        "Africa",
                        "The South Pacific",
                        "Paris",
                    ],
                    "jawaban" => "Paris",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => 'The phrase "a break with" in the text is closest in meaning to',
                    "pilihan" => [
                        "A destruction of",
                        "A departure from",
                        "A collapse of",
                        "A solution to",
                    ],
                    "jawaban" => "A departure from",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "The piece titled The Priestess has all of the following characteristics EXCEPT: ",
                    "pilihan" => [
                        "The design is stylized.",
                        "It is made of marble.",
                        "The carving is not deep.",
                        "It depicts the front of a person.",
                    ],
                    "jawaban" => "It is made of marble.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => '
                    <p><b>Question 9 – 19</b></p>
                    <p>Birds that feed in flocks commonly retire together into roosts. The reasons for roosting communally are not always obvious, but there are some likely benefits. In winter especially, it is important for birds to keep warm at night and <b>(10) conserve</b> precious food reserves. One way to do this is to find a sheltered roost. Solitary roosters shelter in dense vegetation or enter a cavity – horned larks dig holes in the ground and ptarmigan burrow into snow banks – but the effect of sheltering is <b>(12) magnified</b> by      several birds huddling together in the roosts, as wrens, swifts, brown creepers, bluebirds, and anis do. Body contact reduces the surface area exposed to the cold air, so the birds keep each other warm. Two <b>(13) kinglets</b> huddling together were found to reduce their heat losses by a quarter, and three together saved a third of their heat. </p>
                    <p>The second possible benefit of communal roosts is that they act as "information centers." During the day, parties of birds will have spread out to <b>(14) forage</b> over a very    large area. When they return in the evening some will have fed well, but others may have found little to eat. Some investigators have observed that when the birds set out again next morning, those birds that did not feed well on the previous day appear to follow those that did. The behavior of common and lesser kestrels may illustrate different feeding behaviors of similar birds with different roosting habits. The common kestrel hunts vertebrate animals in a small, familiar hunting ground, whereas the very similar lesser kestrel feeds on insects over a large area. The common kestrel roosts and hunts alone, but the lesser kestrel roosts and hunts in flocks, possibly so one bird can learn from others where to find insect swarms.</p>
                    <p>Finally, there is safety in numbers at communal roosts since there will always be a few birds awake at any given moment to give the alarm. But this increased protection is partially <b>(16) counteracted</b> by the fact that mass roosts attract predators and are especially vulnerable if <b>(19) they</b> are on the ground. Even those in trees can be attacked by birds of prey. The birds on the edge are at greatest risk since predators find it easier to catch small birds perching at the margins of the roost.</p>'
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "What does the passage mainly discuss?",
                    "pilihan" => [
                        "How birds find and store food",
                        "How birds maintain body heat in the winter",
                        "Why birds need to establish territory",
                        "Why some species of birds nest together",
                    ],
                    "jawaban" => "Why some species of birds nest together",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => 'The word "conserve" in the text is closest in meaning to',
                    "pilihan" => [
                        "Retain",
                        "Watch",
                        "Locate",
                        "Share",
                    ],
                    "jawaban" => "Retain",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "Ptarmigan keep warm in the winter by",
                    "pilihan" => [
                        "Huddling together on the ground with other birds",
                        "Building nests in trees",
                        "Burrowing into dense patches of vegetation",
                        "Digging tunnels into the snow",
                    ],
                    "jawaban" => "Digging tunnels into the snow",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => 'The word "magnified" in the text is closest in meaning to',
                    "pilihan" => [
                        "Caused",
                        "Modified",
                        "Intensified",
                        "Combined",
                    ],
                    "jawaban" => "Intensified",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "The author mentions kinglets in the text as an example of birds that",
                    "pilihan" => [
                        "Protect themselves by nesting in holes",
                        "Nest with other species of birds",
                        "Nest together for warmth",
                        "Usually feed and nest in pairs",
                    ],
                    "jawaban" => "Nest together for warmth",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => 'The word "forage" in the text is closest in meaning to',
                    "pilihan" => [
                        "Fly",
                        "Assemble",
                        "Feed",
                        "Rest",
                    ],
                    "jawaban" => "Feed",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "Which of the following statements about lesser and common kestrels is true?",
                    "pilihan" => [
                        "The lesser kestrel and the common kestrel have similar diets.",
                        "The lesser kestrel feeds sociably but the common kestrel does not.",
                        "The common kestrel nests in larger flocks than does the lesser kestrel.",
                        "The common kestrel nests in trees; the lesser kestrel nests on the ground.",
                    ],
                    "jawaban" => "The lesser kestrel feeds sociably but the common kestrel does not.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => 'The word "counteracted" in the text is closest in meaning to',
                    "pilihan" => [
                        "Suggested",
                        "Negated",
                        "Measured",
                        "Shielded",
                    ],
                    "jawaban" => "Negated",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "Which of the following is NOT mentioned in the passage as an advantage derived by birds that huddle together while sleeping?",
                    "pilihan" => [
                        "Some members of the flock warn others of impending dangers.",
                        "Staying together provides a greater amount of heat for the whole flock.",
                        "Some birds in the flock function as information centers for others who are looking for food.",
                        "Several members of the flock care for the young.",
                    ],
                    "jawaban" => "Several members of the flock care for the young.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "Which of the following is a disadvantage of communal roosts that is mentioned in the passage?",
                    "pilihan" => [
                        "Diseases easily spread among the birds",
                        "Groups are more attractive to predators than individual birds are.",
                        "Food supplies are quickly depleted.",
                        "Some birds in the group will attack the others.",
                    ],
                    "jawaban" => "Groups are more attractive to predators than individual birds are.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => 'The word "they" in the text refers to',
                    "pilihan" => [
                        "A few birds",
                        "Mass roosts",
                        "Predators",
                        "Trees",
                    ],
                    "jawaban" => "Mass roosts",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b>Question 20 – 30</b></p>
                    <p>Before the mid-nineteenth century, people in the United States ate most foods only in season. Drying, smoking, and salting could preserve meat for a short time, but the availability of fresh meat, like that of fresh milk, was very limited; there was no way to (22) prevent spoilage. But in 1810 a French inventor named Nicolas Appert developed the cooking-and-sealing process of canning. And in the 1850's an American named Gail Borden developed a means of condensing and preserving milk. Canned goods and condensed milk became more common during the 1860's, but supplies remained low because cans had to be made by hand. By 1880, however, inventors had fashioned stamping and soldering machines that mass-produced cans from tinplate. Suddenly all kinds of food could be preserved and bought at all times of the year.</p>
                    <p>Other trends and inventions had also helped make it possible for Americans to vary their daily diets. Growing urban populations created demand that encouraged fruit and vegetable farmers to raise more produce. Railroad refrigerator cars enabled growers   and meat packers to ship perishables great distances and to preserve (25) them for longer periods. Thus, by the 1890's, northern city dwellers could enjoy southern and western strawberries, grapes, and tomatoes, previously available for a month at most, for up to   six months of the year. </p>
                    <p>In addition, increased use of iceboxes enabled families to store perishables. An easy means of producing ice commercially had been invented in the 1870's, and by 1900 the nation had more than two thousand commercial ice plants, most of which made home deliveries. The icebox became a (26) fixture in most homes and remained so until the mechanized refrigerator replaced it in the 1920's and 1930's. Almost everyone now had a more diversified diet. Some people continued to eat mainly foods that were heavy in starches or carbohydrates, and not everyone could    afford meat. (28) Nevertheless, many families could take advantage of previously unavailable fruits, vegetables, and dairy products to achieve more varied fare.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "What does the passage mainly discuss?",
                    "pilihan" => [
                        "Causes of food spoilage",
                        "Commercial production of ice",
                        "Inventions that led to changes in the American diet",
                        "Population movements in the nineteenth century",
                    ],
                    "jawaban" => "Inventions that led to changes in the American diet",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => 'The phrase "in season" in the text discuss?',
                    "pilihan" => [
                        "A kind of weather",
                        "A particular time of year",
                        "An official schedule",
                        "A method of flavoring food",
                    ],
                    "jawaban" => "A particular time of year",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => 'The word "prevent" in the text is closest in meaning to',
                    "pilihan" => [
                        "Estimate",
                        "Avoid",
                        "Correct",
                        "Confine",
                    ],
                    "jawaban" => "Avoid",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "During the 1860's, canned food products were ",
                    "pilihan" => [
                        "Unavailable in rural areas",
                        "Shipped in refrigerator cars",
                        "Available in limited quantities",
                        "A staple part of the American diet",
                    ],
                    "jawaban" => "Available in limited quantities",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "It can be inferred that railroad refrigerator cars came into use ",
                    "pilihan" => [
                        "Before 1860",
                        "Before 1890",
                        "After 1900",
                        "After 1920",
                    ],
                    "jawaban" => "Before 1890",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => 'The word "them" in the text refers to ',
                    "pilihan" => [
                        "Refrigerator cars",
                        "Perishables",
                        "Growers",
                        "Distances",
                    ],
                    "jawaban" => "Perishables",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => 'The word "fixture" in the text is closest in meaning to',
                    "pilihan" => [
                        "Luxury item",
                        "Substance",
                        "Commonplace object",
                        "Mechanical device",
                    ],
                    "jawaban" => "Commonplace object",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "The author implies that in the 1920's and 1930's home deliveries of ice ",
                    "pilihan" => [
                        "decreased in number",
                        "were on an irregular schedule",
                        "increased in cost",
                        "occurred only in the summer",
                    ],
                    "jawaban" => "decreased in number",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => 'The word "nevertheless" in the text is closest in meaning to ',
                    "pilihan" => [
                        "Therefore",
                        "Because",
                        "Occasionally",
                        "However",
                    ],
                    "jawaban" => "However",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "Which of the following types of food preservation was NOT mentioned in the passage?",
                    "pilihan" => [
                        "Drying",
                        "Canning",
                        "Cold storage",
                        "Chemical additives",
                    ],
                    "jawaban" => "Chemical additives",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "Which of the following statements is supported by the passage? ",
                    "pilihan" => [
                        "Tin cans and iceboxes helped to make many foods more widely available.",
                        "Commercial ice factories were developed by railroad owners.",
                        "Most farmers in the United States raised only fruits and vegetables.",
                        "People who lived in cities demanded home delivery of foods.",
                    ],
                    "jawaban" => "Tin cans and iceboxes helped to make many foods more widely available.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b>Question 31 – 38 </b></p>
                    <p>The ability of falling cats to right themselves in midair and land on their feet has been a source of wonder for ages. Biologists long regarded it as an example of adaptation by natural selection, but for physicists it bordered on the miraculous. Newton's laws of motion assume that the total amount of spin of a body cannot change unless an external torque speeds it up or slows it down. If a cat has no spin when it is released and experiences no external torque, it ought not to be able to twist around as it falls.</p>
                    <p>In the speed of its execution, the righting of a tumbling cat resembles a magician's trick. The gyrations of the cat in midair are too fast for the human eye to follow, so the <b>(32) process</b> is obscured. Either the eye must be speeded up, or the cat's fall slowed down for the phenomenon to be observed. A century ago the former was accomplished by means of high-speed photography using equipment now available in any pharmacy. But in the nineteenth century the capture on film of a falling cat constituted a scientific experiment.</p>
                    <p>The experiment was described in a paper presented to the Paris Academy in 1894.Two sequences of twenty photographs each, one from the side and one from behind, show a white cat in the act of righting itself. Grainy and quaint though they are, the photos show that the cat was dropped upside down, with no initial spin and still landed on its feet. Careful analysis of the photos reveals the secret: As the cat <b>(35) rotates</b> the front of its body clockwise, the rear and tail twist counterclockwise, so that the total spin remains zero, in perfect accord with Newton's laws. Halfway down, the cat pulls in its legs before reversing its twist and then extends them again, with the desired end result. The explanation was that while no body can acquire spin without torque, a flexible one can <b>(37) readily</b> change its orientation, or phase. Cats know this instinctively, but scientists could not be sure how it happened until they increased the speed of their perceptions a thousandfold.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "What does the passage mainly discuss? ",
                    "pilihan" => [
                        "The explanation of an interesting phenomenon",
                        "Miracles in modern science",
                        "Procedures in scientific",
                        "The differences between biology and physics",
                    ],
                    "jawaban" => "The explanation of an interesting phenomenon",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => 'The word "process" in the text refers to',
                    "pilihan" => [
                        "the righting of a tumbling cat",
                        "the cat's fall slowed down",
                        "high-speed photography",
                        "a scientific experiment investigation",
                    ],
                    "jawaban" => "the righting of a tumbling cat",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => 'Why are the photographs mentioned in paragraph 3 referred to as an "experiment"?',
                    "pilihan" => [
                        "The photographs were not very clear.",
                        "The purpose of the photographs was to explain the process.",
                        "The photographer used inferior equipment.",
                        "The photographer thought the cat might be injured.",
                    ],
                    "jawaban" => "The purpose of the photographs was to explain the process.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "Which of the following can be inferred about high-speed photography in the late 1800's?",
                    "pilihan" => [
                        "It was a relatively new technology.",
                        "The necessary equipment was easy to obtain.",
                        "The resulting photographs are difficult to interpret.",
                        "It was not fast enough to provide new information.",
                    ],
                    "jawaban" => "It was a relatively new technology.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => 'The word "rotates" in the text is closest in meaning to',
                    "pilihan" => [
                        "Drops",
                        "Turns",
                        "Controls",
                        "Touches",
                    ],
                    "jawaban" => "Turns",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "According to the passage, a cat is able to right itself in midair because it is",
                    "pilihan" => [
                        "Frightened",
                        "Small",
                        "Intelligent",
                        "Flexible",
                    ],
                    "jawaban" => "Flexible",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => 'The word "readily" in the text is closest in meaning to',
                    "pilihan" => [
                        "Only",
                        "Easily",
                        "Slowly",
                        "Certainly",
                    ],
                    "jawaban" => "Easily",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => 'How did scientists increase "the speed of their perceptions a thousandfold" (last sentence in paragraph 3)? ',
                    "pilihan" => [
                        "By analyzing photographs",
                        "By observing a white cat in a dark room",
                        "By dropping a cat from a greater height",
                        "By studying Newton's laws of motion",
                    ],
                    "jawaban" => "By analyzing photographs",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b>Question 39 – 50</b></p>
                    <p>The changing profile of a city in the United States is apparent in the shifting definitions used by the United States Bureau of the Census. In 1870 the census officially <b>(41) distinguished</b> the nation's “urban” from its “rural” population for the first time. “Urban population” was defined as persons living in towns of 8,000 inhabitants or more. But after 1900 it meant persons living in incorporated places having 2,500 or more inhabitants. </p>
                    <p>Then, in 1950 the Census Bureau radically changed its definition of urban to take account of the new vagueness of city boundaries. In addition to persons living in incorporated units of 2,500 or more, the census now included <b>(44) those</b> who lived in unincorporated units of that size, and also all persons living in the densely settled urban fringe, including both incorporated and unincorporated areas located around cities of 50,000 inhabitants or more. Each such unit, conceived as an integrated economic and social unit with a large population nucleus, was named a Standard Metropolitan  	Statistical Area (SMSA). </p>
                    <p>Each SMSA would contain at least (a) one central city with 50,000 inhabitants or more or (b) two cities having shared boundaries and <b>(45) constituting</b>, for general economic and social purposes, a single community with a combined population of at least 50,000, the smaller of <b>(46) which</b> must have a population of at least 15,000. Such an area would include the county in which the central city was located, and adjacent counties that were found to be metropolitan in character and economically and socially integrated with the county of the central city. By 1970, about two-thirds of the population of the United States was living in these urbanized areas, and of that figure more than half were living outside the central cities.</p>
                    <p>While the Census Bureau and the United States government used the term SMSA (by 1969 there were 233 of them), social scientists were also using new terms to   describe the elusive, vaguely defined areas reaching out from what used to be simple “town” and “cities.” A host of terms came into use: “metropolitan regions,” “polynucleated population groups,” “conurbations, “ “metropolitan clusters,” “megalopolises” and so on.</p>"
            ],
            
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "What does the passage mainly discuss?",
                    "pilihan" => [
                        "How cities in the United States began and developed",
                        "Solutions to overcrowding in cities",
                        "The changing definition of an urban area",
                        "How the United States Census Bureau conducts a census",
                    ],
                    "jawaban" => "The changing definition of an urban area",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "According to the passage, the population of the United States was first classified as rural or urban in",
                    "pilihan" => [
                        "1870",
                        "1900",
                        "1950",
                        "1970",
                    ],
                    "jawaban" => "1870",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 41,
                    "soal" => 'The word "distinguished" in the text is closest in meaning to ',
                    "pilihan" => [
                        "Differentiated",
                        "Removed",
                        "Honored",
                        "Protected ",
                    ],
                    "jawaban" => "Differentiated",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 42,
                    "soal" => "Prior to 1900, how many inhabitants would a town have to have before being defined as urban?",
                    "pilihan" => [
                        "2,500",
                        "8,000",
                        "15.000",
                        "50.000",
                    ],
                    "jawaban" => "8,000",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 43,
                    "soal" => "According to the passage, why did the Census Bureau revise the definition of urban in 1950?",
                    "pilihan" => [
                        "City borders had become less distinct.",
                        "Cities had undergone radical social change.",
                        "Elected officials could not agree on an acceptable definition",
                        "New businesses had relocated to larger cities.",
                    ],
                    "jawaban" => "City borders had become less distinct.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 44,
                    "soal" => 'The word "those" in the text refers to',
                    "pilihan" => [
                        "Boundaries",
                        "Persons",
                        "Units",
                        "Areas",
                    ],
                    "jawaban" => "Persons",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 45,
                    "soal" => 'The word "constituting" in the text is closest in meaning to',
                    "pilihan" => [
                        "Located near",
                        "Determined by",
                        "Calling for",
                        "Making up",
                    ],
                    "jawaban" => "Making up",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 46,
                    "soal" => 'The word "which" in the text refers to a smaller',
                    "pilihan" => [
                        "Population",
                        "City",
                        "Character",
                        "Figure",
                    ],
                    "jawaban" => "City",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 47,
                    "soal" => "Which of the following is NOT true of an SMSA? ",
                    "pilihan" => [
                        "It has a population of at least 50.000.",
                        "It can include a city's outlying regions.",
                        "It can include unincorporated regions.",
                        "It consists of at least two cities.",
                    ],
                    "jawaban" => "It consists of at least two cities.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 48,
                    "soal" => "By 1970, what proportion of the population in the United States did NOT live in an SMSA?",
                    "pilihan" => [
                        "3/4",
                        "2/3",
                        "1/2",
                        "1/3",
                    ],
                    "jawaban" => "1/3",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 49,
                    "soal" => 'The Census Bureau first used the term "SMSA" in ',
                    "pilihan" => [
                        "1900",
                        "1950",
                        "1969",
                        "1970",
                    ],
                    "jawaban" => "1950",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 50,
                    "soal" => "Where in the passage does the author mention names used by social scientists for an urban area? ",
                    "pilihan" => [
                        "Paragraph 1",
                        "Paragraph 2",
                        "Paragraph 3",
                        "Paragraph 4",
                    ],
                    "jawaban" => "Paragraph 4",
                ]
            ],
            
        ];

        return $data;
    }

    public function get_soal_listeningv4(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>SECTION 1</b></center></p>
                    <p><center><b>LISTENING COMPREHENSION</b></center></p>
                    <p><center>Time: Approximately 30 minutes 50 questions</center></p>"
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b>PART A</b></p>
                    <p>In Part A , you will hear short conversations between two speakers. At the end of each conversation, a third voice will ask a question about what was said. The question will be spoken just one time. After you hear a conversation and the question about it, read the four possible anwers and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and mark your answer.</p>"
            ],
            [
                "tipe" => "audio",
                "data" => "v4 1-5.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "",
                    "pilihan" => [
                        "He wants to know which scarf the woman chose.",
                        "He wants to know what color the jacket is.",
                        "He thinks he selected a nice scarf.",
                        "He thinks any color would go well with the jacket.",
                    ],
                    "jawaban" => "He thinks he selected a nice scarf.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "",
                    "pilihan" => [
                        "Bob has been married for a long time.",
                        "The woman should go to California.",
                        "He plans to go to the wedding.",
                        "He hasn't been to California for a long time.",
                    ],
                    "jawaban" => "The woman should go to California.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "",
                    "pilihan" => [
                        "He wants a glass of water.",
                        "He won't do as the woman asks.",
                        "He can't wait any longer.",
                        "He's looking for the waiter.",
                    ],
                    "jawaban" => "He won't do as the woman asks.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "",
                    "pilihan" => [
                        "It's just past ten o'clock.",
                        "There's no time to talk.",
                        "She needs a little more time.",
                        "She has more than ten cents.",
                    ],
                    "jawaban" => "It's just past ten o'clock.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "",
                    "pilihan" => [
                        "She appreciates the man's help.",
                        "Her presentation was somewhat long.",
                        "She needed more time to prepare.",
                        "She worked hard on her presentation.",
                    ],
                    "jawaban" => "She worked hard on her presentation.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v4 6-10.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "",
                    "pilihan" => [
                        "She wants to exercise before she runs.",
                        "It's too hot to go running.",
                        "Her jogging suit isn't warm enough.",
                        "She already went jogging.",
                    ],
                    "jawaban" => "She wants to exercise before she runs.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "",
                    "pilihan" => [
                        "To tell him they are busy.",
                        "To cancel an appointment.",
                        "To invite him to go to a film.",
                        "To ask him a question about homework.",
                    ],
                    "jawaban" => "To invite him to go to a film.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "",
                    "pilihan" => [
                        "Keep looking for his wallet.",
                        "Report the theft of the wallet right away.",
                        "Put his wallet in his jacket pocket.",
                        "Be more careful with his wallet.",
                    ],
                    "jawaban" => "Keep looking for his wallet.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "",
                    "pilihan" => [
                        "She is on a special diet.",
                        "She doesn't like to walk to the cafeteria.",
                        "She thinks the cafeteria is too expensive.",
                        "She doesn't eat lunch anymore.",
                    ],
                    "jawaban" => "She thinks the cafeteria is too expensive.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "",
                    "pilihan" => [
                        "The man should look into buying a new car.",
                        "The car looks better than it used to.",
                        "The man should fly to Florida.",
                        "The man should get his car checked.",
                    ],
                    "jawaban" => "The man should get his car checked.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v4 11-15.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "",
                    "pilihan" => [
                        "Tickets are available for future performances.",
                        "The performance has been canceled.",
                        "She wants to see the show tomorrow.",
                        "The performance has already started.",
                    ],
                    "jawaban" => "Tickets are available for future performances.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "",
                    "pilihan" => [
                        "What is causing the problem.",
                        "When the faucet started leaking.",
                        "How old the faucet is.",
                        "How to deal with the problem.",
                    ],
                    "jawaban" => "How to deal with the problem.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "",
                    "pilihan" => [
                        "In a locker room.",
                        "In a department store.",
                        "In a shoe-repair shop.",
                        "At a track.",
                    ],
                    "jawaban" => "In a department store.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "",
                    "pilihan" => [
                        "It fell out of the camera.",
                        "Mary developed it in photography class.",
                        "Susan took it to be developed.",
                        "The man gave it to Susan.",
                    ],
                    "jawaban" => "Susan took it to be developed.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "",
                    "pilihan" => [
                        "He got out of the shower to answer the phone.",
                        "He didn't hear the phone ringing.",
                        "There's something wrong with the shower.",
                        "He took a shower earlier than usual.",
                    ],
                    "jawaban" => "He got out of the shower to answer the phone.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v4 16-20.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "",
                    "pilihan" => [
                        "His vacation has been postponed.",
                        "He needs to take his medicine with him on vacation.",
                        "He is going to change his allergy medicine.",
                        "His allergies no longer bother him.",
                    ],
                    "jawaban" => "He needs to take his medicine with him on vacation.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "",
                    "pilihan" => [
                        "She might be late for her chemistry class.",
                        "She'll borrow a bike after class.",
                        "She might be delayed in lab.",
                        "She might ride her bike to the lab.",
                    ],
                    "jawaban" => "She might be delayed in lab.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "",
                    "pilihan" => [
                        "Laurie doesn't have much musical talent.",
                        "Laurie taught herself to play the guitar.",
                        "Laurie wants to play music with other people.",
                        "Laurie has a summer job playing guitar.",
                    ],
                    "jawaban" => "Laurie taught herself to play the guitar.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "",
                    "pilihan" => [
                        "Get a job on campus.",
                        "Take an electronics course.",
                        "Visit the electronics company.",
                        "Apply for a job with the electronics company.",
                    ],
                    "jawaban" => "Apply for a job with the electronics company.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "",
                    "pilihan" => [
                        "He no longer watches much television.",
                        "He prefers the comedies from the sixties.",
                        "Television comedies haven't improved since the sixties.",
                        "He hasn't seen many of the old shows.",
                    ],
                    "jawaban" => "Television comedies haven't improved since the sixties.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v4 21-25.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "",
                    "pilihan" => [
                        "The woman is satisfied that the book has been returned.",
                        "The woman doesn't lend books to people.",
                        "The man is too embarrassed to borrow a book from the woman.",
                        "The man can't find the book he borrowed from the woman.",
                    ],
                    "jawaban" => "The woman is satisfied that the book has been returned.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "",
                    "pilihan" => [
                        "He's never been to a debate.",
                        "He thinks the team was eliminated.",
                        "He can't go to the state competition.",
                        "He doesn't know if the team was successful.",
                    ],
                    "jawaban" => "He doesn't know if the team was successful.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "",
                    "pilihan" => [
                        "Ask the professor if the course will be given again.",
                        "Postpone taking the course.",
                        "Request permission to take the courses together.",
                        "Take the course from a different professor.",
                    ],
                    "jawaban" => "Request permission to take the courses together.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "",
                    "pilihan" => [
                        "She also needs a new tennis racket.",
                        "She wants to borrow some money, too.",
                        "She doesn't think Brian will repay the loan.",
                        "She couldn't get Brian to play tennis.",
                    ],
                    "jawaban" => "She doesn't think Brian will repay the loan.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "",
                    "pilihan" => [
                        "His violin is out of tune now.",
                        "He probably lost some of his skill on the violin.",
                        "He has worked as a violinist for a long time.",
                        "He's too old to begin studying the violin.",
                    ],
                    "jawaban" => "He probably lost some of his skill on the violin.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v4 26-30.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "",
                    "pilihan" => [
                        "He doesn't expect to enjoy the theater.",
                        "He's sorry he can't go with the woman.",
                        "He thinks the theater will be too crowded.",
                        "He rarely goes to plays.",
                    ],
                    "jawaban" => "He doesn't expect to enjoy the theater.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "",
                    "pilihan" => [
                        "He'll see the exhibit after June.",
                        "He visited the new student several times.",
                        "He wants to exhibit his work at the Student Center.",
                        "He can see the exhibit before it closes.",
                    ],
                    "jawaban" => "He can see the exhibit before it closes.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "",
                    "pilihan" => [
                        "She is going to miss her first class.",
                        "She prefers going to the dentist later in the day.",
                        "The man will be finished before his first class.",
                        "The man might sleep late and miss his appointment.",
                    ],
                    "jawaban" => "The man will be finished before his first class.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "",
                    "pilihan" => [
                        "Put some money in her wallet.",
                        "Buy a band-concert ticket.",
                        "Make a donation.",
                        "Lend the man some money.",
                    ],
                    "jawaban" => "Make a donation.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "",
                    "pilihan" => [
                        "Their friends would take them to the beach.",
                        "They wouldn't mind taking the bus.",
                        "Someone would drive them home.",
                        "They wouldn't be able to find a phone.",
                    ],
                    "jawaban" => "Someone would drive them home.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>PART B</b></center></p>
                    <p>DIRECTION</p>
                    <p>In Part B, you will hear longer conversation, after each conversation, you will be asked some question. The conversation and question will be spoken just one time. They will not be written out for you, so you will have to listen carefully in order to understand and remember what the speakers says.</p>
                    <p>When you hear a question, read the four possible answers in your test book and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and fill in the space that corresponds to the letter of the answer you have chosen.</p>"
            ],
            [
                "tipe" => "audio",
                "data" => "v4 31-34.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "",
                    "pilihan" => [
                        "Relaxing at the seashore.",
                        "Visiting her parents.",
                        "Sailing on a boat.",
                        "Preparing for a race.",
                    ],
                    "jawaban" => "Relaxing at the seashore.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "",
                    "pilihan" => [
                        "She was invited only for the weekend.",
                        "The weather was too hot.",
                        "She had an appointment.",
                        "She had schoolwork to do.",
                    ],
                    "jawaban" => "She had schoolwork to do.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "",
                    "pilihan" => [
                        "She had to go home.",
                        "She was too tired to continue.",
                        "She had to finish her schoolwork.",
                        "She was thirsty.",
                    ],
                    "jawaban" => "She was too tired to continue.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "",
                    "pilihan" => [
                        "She doesn't know how to swim.",
                        "The water was too deep.",
                        "The water was too cold.",
                        "She didn't have enough time.",
                    ],
                    "jawaban" => "The water was too cold.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v4 35-38.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "",
                    "pilihan" => [
                        "A vacation trip to Yellowstone Park.",
                        "A lecture by a visiting professor.",
                        "Her biology thesis.",
                        "A research project.",
                    ],
                    "jawaban" => "A research project.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "",
                    "pilihan" => [
                        "More buffalo are surviving the winter.",
                        "Fewer buffalo are dying of disease.",
                        "More buffalo are being born.",
                        "Fewer buffalo are being killed by hunters.",
                    ],
                    "jawaban" => "More buffalo are surviving the winter.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "",
                    "pilihan" => [
                        "She is from Wyoming.",
                        "She needs the money.",
                        "She has been studying animal diseases.",
                        "Her thesis adviser is heading the project.",
                    ],
                    "jawaban" => "She has been studying animal diseases.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => "",
                    "pilihan" => [
                        "Collecting information about the bacteria.",
                        "Working on a cattle ranch.",
                        "Writing a paper about extinct animals.",
                        "Analyzing buffalo behavior.",
                    ],
                    "jawaban" => "Collecting information about the bacteria.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>PART C</b></center></p>
                    <p>DIRECTION</p>
                    <p>In Part C, You will hear several talks. After each talk, you will be asked some questions. The talks and questions will be spoken just one time. They will not be written out for you, so you will have to listen carefully in order to understand and remember what the speaker says.</p>
                    <p>When you hear a question, read the four possible answers in your test book and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and fill in the space that corresponds to the letter of the answer you have choosen.</p>"
            ],
            [
                "tipe" => "audio",
                "data" => "v4 39-41.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "",
                    "pilihan" => [
                        "To inform visitors of the park's history.",
                        "To provide an overview of the park's main attractions.",
                        "To show visitors remote places in the park.",
                        "To teach visitors how best to photograph wildlife.",
                    ],
                    "jawaban" => "To provide an overview of the park's main attractions.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "",
                    "pilihan" => [
                        "It's easy to get lost.",
                        "It requires enormous strength.",
                        "It's a good group activity.",
                        "People shouldn't do it in the winter.",
                    ],
                    "jawaban" => "It's easy to get lost.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 41,
                    "soal" => "",
                    "pilihan" => [
                        "There are fewer tourists.",
                        "The entrance fees are lower.",
                        "The animals are more active.",
                        "There are fewer insects.",
                    ],
                    "jawaban" => "There are fewer insects.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v4 42-46.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 42,
                    "soal" => "",
                    "pilihan" => [
                        "To show a videotape on survival in outer space.",
                        "To gain support for the space program.",
                        "To describe her experience oh space missions.",
                        "To inform the audience about the space suit.",
                    ],
                    "jawaban" => "To inform the audience about the space suit.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 43,
                    "soal" => "",
                    "pilihan" => [
                        "The lack of air pressure.",
                        "The extremely hot or cold temperatures.",
                        "Exposure to radiation.",
                        "An inadequately ventilated space suit.",
                    ],
                    "jawaban" => "The lack of air pressure.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 44,
                    "soal" => "",
                    "pilihan" => [
                        "On the exterior of the space shuttle.",
                        "In the torso of the space suit.",
                        "In the helmet.",
                        "In the control center at NASA.",
                    ],
                    "jawaban" => "In the torso of the space suit.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 45,
                    "soal" => "",
                    "pilihan" => [
                        "A videotape.",
                        "A book.",
                        "A picture.",
                        "An oxygen tank.",
                    ],
                    "jawaban" => "A picture.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 46,
                    "soal" => "",
                    "pilihan" => [
                        "Another speaker will describe the helmet.",
                        "The woman will talk about the space shuttle.",
                        "Someone from the audience will try on the helmet.",
                        "The woman will put on a space suit.",
                    ],
                    "jawaban" => "Someone from the audience will try on the helmet.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v4 47-50.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 47,
                    "soal" => "",
                    "pilihan" => [
                        "To describe Twyla Tharp's career.",
                        "To introduce a well-known dancer.",
                        "To provide background for a video presentation.",
                        "To encourage the audience to study dance.",
                    ],
                    "jawaban" => "To provide background for a video presentation.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 48,
                    "soal" => "",
                    "pilihan" => [
                        "The dancers in the video had more experience with Tharp's choreography.",
                        "Twyla Tharp was the lead dancer in the video.",
                        "The filming techniques made the dance easier to understand.",
                        "The new musical score was more appropriate for the topic.",
                    ],
                    "jawaban" => "The filming techniques made the dance easier to understand.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 49,
                    "soal" => "",
                    "pilihan" => [
                        "Jazz.",
                        "Folk.",
                        "Classical.",
                        "Rock.",
                    ],
                    "jawaban" => "Rock.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 50,
                    "soal" => "",
                    "pilihan" => [
                        "What the pineapple symbolizes.",
                        "Twyla Tharp's career in dance.",
                        "How the video was filmed.",
                        "The quality of the music in the video.",
                    ],
                    "jawaban" => "What the pineapple symbolizes.",
                ]
            ]
        ];

        return $data;
    }

    public function get_soal_structurev4(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>SECTION 2</b></center></p>
                    <p><center><b>STRUCTURE AND WRITTEN EXPRESSION</b></center></p>
                    <p><center>Time: 30 minutes</center></p>
                    <p><center>40 questions</center></p>
                    <p>DIRECTIONS</p>
                    <p>Questions number 1-15 are incomplete sentences. Beneath each sentence you will see four words or phrases, marked (A), (B), (C), and (D). Choose the one word of phrase that best complets the sentence. Then, on your answer sheet, find the number of the question and fill in the space that corresponds to the letter of the answer you have chosen. Fill in the space so that the letter inside the oval cannot be seen.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "After quartz, calcite is the ..... in the crust of the Earth.",
                    "pilihan" => [
                        "Mineral is most abundant",
                        "Mineral that most abundant",
                        "Most abundant mineral that",
                        "Most abundant mineral",
                    ],
                    "jawaban" => "Most abundant mineral",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "Regarded as the world’ s foremost linguistic theorist, Noam Chomsky continues ..... new theories about language and language learning.",
                    "pilihan" => [
                        "For creating",
                        "By creation",
                        "To create",
                        "Create",
                    ],
                    "jawaban" => "To create",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "..... any area receives more water than the ground can absorb, the excess water flows to the lowest level, carrying loose mineral.",
                    "pilihan" => [
                        "Being ",
                        "Whenever",
                        "When might",
                        "Is",
                    ],
                    "jawaban" => "Whenever",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "In 1935 seismologist Charles F.  Richter devised ..... for rating the strength of earthquakes. ",
                    "pilihan" => [
                        "For the numerical scale",
                        "The scale is numerical",
                        "A numerical scale",
                        "A scale of numerical",
                    ],
                    "jawaban" => "A numerical scale",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "After the Second World War the woman wage earner ..... a standard part of middle-class life in the United States.",
                    "pilihan" => [
                        "Who became",
                        "Becoming that which",
                        "Became",
                        "To become",
                    ],
                    "jawaban" => "Became",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "Celluloid and plastics have largely replaced genuine ivory in the manufacture ..... buttons, billiard balls, and piano keys.",
                    "pilihan" => [
                        "Of such things as",
                        "As of such things",
                        "Such things as of",
                        "Things as of such",
                    ],
                    "jawaban" => "Of such things as",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "One of the tenets of New Criticism is that a critic need not tell readers ..... about a story.",
                    "pilihan" => [
                        "Which thinking",
                        "What to think",
                        "That thinking",
                        "To think what",
                    ],
                    "jawaban" => "What to think",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "The outer ear, ..... the fleshy pinna and the auditory canal, picks up and funnels sound waves toward the eardrum. ",
                    "pilihan" => [
                        "Includes",
                        "Which it includes",
                        "Which includes",
                        "Of which includes",
                    ],
                    "jawaban" => "Which includes",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "The chair may be the oldest type of furniture, ..... its importance has varied from time to time and from country to country. ",
                    "pilihan" => [
                        "But when",
                        "Until then",
                        "In spite of",
                        "Although",
                    ],
                    "jawaban" => "Although",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "When wood, natural gas, oil, or any other fuel burns, ..... with oxygen in the air to produce heat. ",
                    "pilihan" => [
                        "Combining substances in the fuel",
                        "Substances in the fuel that combine",
                        "Substances in the fuel combine",
                        "A combination of substances in the fuel",
                    ],
                    "jawaban" => "Substances in the fuel combine",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "Deserts are arid land areas where ..... through evaporation than is gained through precipitation. ",
                    "pilihan" => [
                        "The loss of more water",
                        "Loses more water",
                        "Is more water lost",
                        "More water is lost",
                    ],
                    "jawaban" => "More water is lost",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "When goshawk chicks are young, ..... parents share in the hunting duties and in guarding the nest. ",
                    "pilihan" => [
                        "The both",
                        "Both",
                        "Both of",
                        "And both",
                    ],
                    "jawaban" => "Both",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "Not only ..... among the largest animals that ever lived, but they are also among the most intelligent. ",
                    "pilihan" => [
                        "Are whales",
                        "Whales",
                        "Some whales",
                        "They are whales",
                    ],
                    "jawaban" => "Are whales",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "Fish are the most ancient form of vertebrate life, and ..... all other vertebrates. ",
                    "pilihan" => [
                        "From them evolved",
                        "Evolved them",
                        "To evolve",
                        "They are evolved",
                    ],
                    "jawaban" => "From them evolved",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "..... 350 species of sharks, and although they are all carnivorous, only a few species will attack people.",
                    "pilihan" => [
                        "About",
                        "Where about",
                        "There are about",
                        "About the",
                    ],
                    "jawaban" => "There are about",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "The dandelion <u>plant</u> has a straight, <u>smoothly</u>, and hollow stem <u>that</u> contains a <u>white</u>, milky juice. ",
                    "pilihan" => [
                        "plant",
                        "smoothly",
                        "that",
                        "white",
                    ],
                    "jawaban" => "smoothly",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "Of the <u>much</u> factors that <u>contributed</u> to the <u>growth</u> of international tourism in the 1950’ s, <u>one</u> of the most important was the advent of jet travel in 1958. ",
                    "pilihan" => [
                        "much",
                        "contributed",
                        "growth",
                        "one",
                    ],
                    "jawaban" => "much",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "The Canadian <u>province</u> of Alberta <u>it is believed</u> <u>to have</u> some of the <u>richest oil deposits</u> in the world. ",
                    "pilihan" => [
                        "province",
                        "it is believed",
                        "to have",
                        "richest oil deposits",
                    ],
                    "jawaban" => "it is believed",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "Elizabeth Bishop’ s poems <u>are</u> frequently <u>long</u> and carefully constructed, <u>uses</u> <u>elaborate</u> rhyme or half-rhymes. ",
                    "pilihan" => [
                        "are",
                        "long",
                        "uses",
                        "elaborate",
                    ],
                    "jawaban" => "uses",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "California <u>has</u> more land <u>under</u> irrigation <u>than</u> any <u>another</u> state. ",
                    "pilihan" => [
                        "has",
                        "under",
                        "than",
                        "another",
                    ],
                    "jawaban" => "another",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "Thomas Moran’ s magnificent, <u>colorful</u> paintings <u>onto</u> Wyoming landscapes captured the spirit <u>of the</u> western wilderness in the <u>late</u> nineteenth century.",
                    "pilihan" => [
                        "colorful",
                        "onto",
                        "of the",
                        "late",
                    ],
                    "jawaban" => "onto",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "Emily Dickinson, among the greatest women <u>poets</u> in the English language, died <u>with</u> all of <u>hers</u> poems unpublished, except for seven that appeared in <u>publications</u> of limited circulation. ",
                    "pilihan" => [
                        "poets",
                        "with",
                        "hers",
                        "publications",
                    ],
                    "jawaban" => "hers",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "Protecting Florida’ s coral reefs in <u>difficult</u> because some of the corals are <u>very</u> fragile: even the <u>touch of</u> a diver’ s hand can kill <u>it</u>. ",
                    "pilihan" => [
                        "difficult",
                        "very",
                        "touch",
                        "it",
                    ],
                    "jawaban" => "it",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "Martin Luther King, Jr., <u>is</u> well known for <u>organize</u> the huge <u>human rights</u> march that <u>took place</u> in Washington in 1963.",
                    "pilihan" => [
                        "is",
                        "organize",
                        "human rights",
                        "took place",
                    ],
                    "jawaban" => "organize",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "<u>A lightning</u> flash produces electromagnetic waves <u>that</u> may <u>travels</u> along the Earth’ s magnetic field <u>for long</u> distances. ",
                    "pilihan" => [
                        "A lightning",
                        "that",
                        "travels",
                        "for long",
                    ],
                    "jawaban" => "travels",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "One of the earliest <u>plants domesticated</u> in the Western Hemisphere, manioc <u>was introduced</u> to Europe <u>by</u> Spaniards <u>returning from</u> the New World. ",
                    "pilihan" => [
                        "plants domesticated",
                        "was introduced",
                        "by",
                        "returning from",
                    ],
                    "jawaban" => "was introduced",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "<u>Besides</u> the age of nine and fifteen, <u>almost</u> all <u>young</u> people undergo a <u>rapid</u> series of physiological changes. ",
                    "pilihan" => [
                        "Besides",
                        "almost",
                        "young",
                        "rapid",
                    ],
                    "jawaban" => "Besides",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "<u>The</u> frequency of meteors in the Earth’ s atmosphere <u>increases</u> when the Earth <u>passes</u> through a swarm of particle <u>generated</u> by the breakup of a comet. ",
                    "pilihan" => [
                        "The",
                        "increases",
                        "passes",
                        "generated",
                    ],
                    "jawaban" => "passes",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "Ponds <u>are</u> noted for their <u>rich</u> and <u>varied types</u> of plant and animal life, <u>all</u> maintain in a delicate ecological balance. ",
                    "pilihan" => [
                        "are",
                        "rich",
                        "varied types",
                        "all",
                    ],
                    "jawaban" => "varied types",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "<u>In</u> the 1920’ s cinema <u>became</u> an important art form and <u>one</u> of the ten largest <u>industry</u> in the United States. ",
                    "pilihan" => [
                        "In",
                        "became",
                        "one",
                        "industry",
                    ],
                    "jawaban" => "industry",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "</u>To improvise</u> effectively, a musician must <u>thorough</u> understand the conventions <u>of</u> a <u>given</u> musical style. ",
                    "pilihan" => [
                        "To improvise",
                        "thorough",
                        "of",
                        "given",
                    ],
                    "jawaban" => "thorough",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "During the Jurassic period plant life was <u>abundance</u>, providing herbivores <u>in particular</u> with a <u>plentiful</u> supply of <u>food</u>. ",
                    "pilihan" => [
                        "abundance",
                        "in particular",
                        "plentiful",
                        "food",
                    ],
                    "jawaban" => "abundance",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "<u>Some</u> maple trees <u>are raised</u> for their sap, <u>which</u> has a high sugar content <u>for</u> yields sugar and syrup.",
                    "pilihan" => [
                        "Some",
                        "are raised",
                        "which",
                        "for",
                    ],
                    "jawaban" => "for",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "<u>Long before</u> boats became important in recreation, they were <u>valuable</u> to people for many essential tasks, <u>included</u> transportation <u>and</u> fishing. ",
                    "pilihan" => [
                        "Long before",
                        "valuable",
                        "included",
                        "and",
                    ],
                    "jawaban" => "included",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "Asteroids may be <u>fragments</u> of a planet <u>shattered</u> <u>long ago</u> or <u>from material</u> the nuclei of old comets. ",
                    "pilihan" => [
                        "fragments",
                        "shattered",
                        "long ago",
                        "from material",
                    ],
                    "jawaban" => "from material",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "The first Native Americans <u>to occupy</u> <u>what is</u> now the southwestern United States <u>were</u> the Big-Game Hunters, <u>which</u> appeared about 10,000 B.C. ",
                    "pilihan" => [
                        "to occupy",
                        "what is",
                        "were",
                        "which",
                    ],
                    "jawaban" => "which",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "<u>Some</u> hangers, buildings used to hold large aircraft, are <u>very</u> tall that rain occasionally falls <u>from</u> clouds that form <u>along</u> the ceilings. ",
                    "pilihan" => [
                        "Some",
                        "very",
                        "from",
                        "along",
                    ],
                    "jawaban" => "very",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => "Most sand dunes are always in <u>motion</u> as wind pushes sand <u>upward</u> one side of each dune, over the top, <u>and</u> down <u>the other</u> side. ",
                    "pilihan" => [
                        "motion",
                        "upward",
                        "and",
                        "the other",
                    ],
                    "jawaban" => "upward",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "<u>Farms</u> of maize, beans, and tobacco, the Wendat, Native American tribes that <u>inhabited</u> present-day Michigan, lived a sedentary <u>life</u> in <u>densely populated</u> villages. ",
                    "pilihan" => [
                        "Farms",
                        "inhabited",
                        "life",
                        "densely populated",
                    ],
                    "jawaban" => "Farms",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "Recently scientists have <u>apply</u> new tools of biochemistry <u>and</u> molecular biology <u>to investigate</u> the structure of human <u>hair</u>.",
                    "pilihan" => [
                        "apply",
                        "and",
                        "to investigate",
                        "hair",
                    ],
                    "jawaban" => "apply",
                ]
            ]
        ];

        return $data;
    }

    public function get_soal_readingv4(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>SECTION 3</b></center></p>
                    <p><center><b>READING COMPREHENSION</b></center></p>
                    <p><center>Time : 60 Minutes</center></p>
                    <p><center>50 Questions</center></p>
                    <p>DIRECTIONS</p>
                    <p>In this section, you will read a number of passages. Each one is followed by approximately ten questions about it. For 1-50, chose the one best answer, (A), (B), (C), and (D), to each question. Then, find the number of the question on your answer sheet, and fill in the space that corresponds to the letter of the answer you have choosen. Answer all of the questions following a passage on the basis of what is stated in that passage.</p>"
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>Question 1- 9 </p>
                    <p>Around the year 1500, hunting people occupied the entire northern third of North America. They lived well from the animals with whom they shared these lands. Hunters of sea mammals had colonized the Arctic coasts of Canada and Greenland between four and five thousand years before. Land-hunting people had lived throughout much of the northern interior for at least 12,000 years. Northern North America is part of a larger circumpolar ecological <b>(1) domain</b> that continues across the narrow Bering Strait into Siberia and northern Europe. The overall circumpolar environment in the 1500’ s was not very different from the environment of the present. This vast landmass had a continental climate and was dominated by cold arctic air throughout a long winter and spring season. Summer temperatures ranged from near freezing to the mid-20's Celsius, while winter temperatures were often as low as 40 degrees below zero Celsius.</p>
                    <p>Geographers divide the overall circumpolar domain into two zones, the Arctic and below it, the Subarctic. They refer to the landforms of these areas as tundra and taiga, respectively. Temperatures in the northern lands were below freezing for eight or nine months of the year. Subsurface soil in the Arctic's tundra remained permanently frozen. Even when summer temperatures were above freezing and the top inches of earth became <b>(4) saturated</b> with water, the soil below remained frozen into a permafrost, as hard as rock.</p>
                    <p>When water flowed upon the surface of permanently frozen tundra, it made overland travel extremely difficult. Summer travel in the boggy lands, or muskeg country, of the Subarctic's taiga was also slow and <b>(5) arduous</b>. Tracking animals was more difficult than it was during the winter when the swampy ground was frozen solid and covered with snow. In both tundra and taiga, hordes of mosquitoes and biting flies bred in the <b>(6) standing</b> pools of water. Clothing lost its thermal efficiency when it became damp. Northern people looked forward to the turn of the season to bring the easier traveling conditions associated with cold weather. In the Arctic, they could haul food and supplies by dogsled while in the Subarctic, people could travel quickly and efficiently by snowshoes and toboggan.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "The word <q>domain</q> in the text is closest in meaning to",
                    "pilihan" => [
                        "Temperature",
                        "Period",
                        "Region",
                        "Process",
                    ],
                    "jawaban" => "Region",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "Which of the following terms is used to describe the landforms of the Arctic region?",
                    "pilihan" => [
                        "Subarctic",
                        "Taiga",
                        "Tundra",
                        "Muskeg",
                    ],
                    "jawaban" => "Tundra",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "For how many months of the year were temperatures below freezing in the circumpolar region?",
                    "pilihan" => [
                        "4-5 months",
                        "6 months",
                        "8-9 months",
                        "12 months",
                    ],
                    "jawaban" => "8-9 months",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "The word <q>saturated</q> in the text is closest in meaning to ",
                    "pilihan" => [
                        "Enriched",
                        "Dissolved",
                        "Removed",
                        "Soaked",
                    ],
                    "jawaban" => "Soaked",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "The word <q>arduous</q> in the text is closest in meaning to ",
                    "pilihan" => [
                        "Humid",
                        "Difficult",
                        "Indirect",
                        "Unnecessary",
                    ],
                    "jawaban" => "Difficult",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "The word <q>standing</q> in the text is closest in meaning to",
                    "pilihan" => [
                        "Not flowing",
                        "Very deep",
                        "Numerous",
                        "Contaminated",
                    ],
                    "jawaban" => "Not flowing",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "All of the following are mentioned as having made travel in the summer difficult EXCEPT",
                    "pilihan" => [
                        "Insects",
                        "Wet clothing",
                        "Swampy lands",
                        "Lack of supplies",
                    ],
                    "jawaban" => "Lack of supplies",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "The subsurface soil in the Arctic's tundra is most comparable to which of the following?",
                    "pilihan" => [
                        "Cement",
                        "A bog",
                        "A pond",
                        "Sand",
                    ],
                    "jawaban" => "Cement",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "Where in the passage does the author mention a means by which people traveled in the northern lands?",
                    "pilihan" => [
                        "The first sentence in paragraph 1",
                        "The first sentence in paragraph 2",
                        "The last sentence in paragraph 2",
                        "Paragraph 3",
                    ],
                    "jawaban" => "Paragraph 3",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>Questions 10-19 </p>
                    <p>Social parasitism involves one species relying on another to <b>(11) raise</b> its young. Among vertebrates, the best known social parasites are such birds as <b>(12) cuckoos and cowbirds</b>; the female lays an egg in a nest belonging to another species and leaves <b>(13) it</b> for the host to rear.</p>
                    <p><b>(14) The dulotic species of ants, however, are the supreme social parasites</b>. Consider, for example, the unusual behavior of ants belonging to the genus Polyergus. All species of this ant have lost the ability to care for themselves. The workers do not forage for food. feed their brood or queen, or even dean their own nest. To compensate for these deficits, Polyergus has become specialized at obtaining workers from the related genus Formica to do these chores. </p>
                    <p>In a raid, several thousand Polyergus workers will travel up to 500 feet in search of a Formica nest, penetrate it, drive off the queen and tier workers, capture the pupal brood, and transport it back to their nest. The captured brood is then reared by the resident Formica workers until the developing pupae emerge to add to the Formica population, which maintains the mixed-species nest The Formica workers forage for food and give it to colony members of both species. They also remove wastes and <b>(16) excavate</b> new chambers as the population increases. </p>
                    <p>The true extent of the Polyergus ants' dependence on the Formica becomes apparent when the worker population grows too large for the existing nest. Formica scouts locate a new nesting site, return to the mixed-species colony, and <b>(17) recruit</b> additional Formica nest mates. During a period that may last seven days, the Formica workers carry to the new nest all the Polyergus eggs, larvae, and pupae, every Polyergus adult, and even the Polyergus queen. </p>
                    <p>Of the approximately 8,000 species of ants in the world, all 5 species of Polyergus and some 200 species in other genera have evolved some degree of parasitic relationship with other ants.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "Which of the following statements best represents the main idea of the passage?",
                    "pilihan" => [
                        "Ants belonging to the genus Formica are incapable of performing certain tasks.",
                        "The genus Polyergus is quite similar to the genus Formica.",
                        "Ants belonging to the genus Polyergus have an unusual relationship with ants belonging to the genus Formica.",
                        "Polyergus ants frequently leave their nests to build new colonies.",
                    ],
                    "jawaban" => "Ants belonging to the genus Polyergus have an unusual relationship with ants belonging to the genus Formica.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "The word <q>raise</q> in the text is closest in meaning to",
                    "pilihan" => [
                        "Rear",
                        "Lift",
                        "Collect",
                        "Increase",
                    ],
                    "jawaban" => "Rear",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "The author mentions cuckoos and cowbirds in the text because they",
                    "pilihan" => [
                        "Share their nests with each other",
                        "Are closely related species",
                        "Raise the young of other birds",
                        "Are social parasites",
                    ],
                    "jawaban" => "Are social parasites",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "The word <q>it</q> in the text refers to",
                    "pilihan" => [
                        "Species",
                        "Nest",
                        "Egg",
                        "Female",
                    ],
                    "jawaban" => "Egg",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "What does the author mean by stating that <q>The dulotic species of lifts... are die supreme social parasites</q> (in the text) ?",
                    "pilihan" => [
                        "The Polyergus are more highly developed than die Formica.",
                        "The Formica have developed specialized roles.",
                        "The Polyergus are heavily dependent on the Formica.",
                        "The Formica do not reproduce rapidly enough to care for themselves",
                    ],
                    "jawaban" => "The Polyergus are heavily dependent on the Formica.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "Which of the following is a task that an ant of the genus Polyergus might do?",
                    "pilihan" => [
                        "Look for food.",
                        "Raid another nest",
                        "Care for the young.",
                        "Clean its own nest.",
                    ],
                    "jawaban" => "Raid another nest",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "The word <q>excavate</q> in the text is closest in meaning to",
                    "pilihan" => [
                        "Find",
                        "Clean",
                        "Repair",
                        "Dig",
                    ],
                    "jawaban" => "Dig",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "The word <q>recruit</q> in the text is closest in meaning",
                    "pilihan" => [
                        "Create",
                        "Enlist",
                        "Endure",
                        "Capture",
                    ],
                    "jawaban" => "Enlist",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "What happens when a mixed colony of Polyergus and Formica ants becomes too large?",
                    "pilihan" => [
                        "The Polyergus workers enlarge the existing nest.",
                        "The captured Formica workers return to their original nest.",
                        "The Polyergus and the Formica build separate nests.",
                        "The Polyergus and the Formica move to a new nest.",
                    ],
                    "jawaban" => "The Polyergus and the Formica move to a new nest.",
                ]
                ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "According to the information in the passage, all of the following terms refer to ants belonging to the genus Formica EXCEPT the",
                    "pilihan" => [
                        "Dulotic species of ants (paragraph 2)",
                        "Captured brood (paragraph 3)",
                        "Developing pupae (paragraph 3)",
                        "Worker population (paragraph 4)",
                    ],
                    "jawaban" => "Dulotic species of ants (paragraph 2)",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>Questions 20-29 </p>
                    <p>The Winterthur Museum is a collection and a house. There are many museums <b>(21) devoted</b> to the decorative arts and many house museums, but rarely in the United States is a great collection displayed in a great country house. Passing through successive generations of a single family, Winterthur has been a private estate for more than a century. Even after the extensive renovations made to it between 1929 and 1931, the house remained a family residence. This fact is of importance to the atmosphere and  effect of the museum. <b>(23) The impression of a lived-in house is apparent to the visitor</b>; the rooms look as if they were vacated only a short while ago whether by the original owners of the furniture or the most recent residents of the house can be a matter of personal interpretation. Winterthur remains, then, a house in which a collection of furniture and architectural elements has been <b>(24) assembled</b>. Like an English country house, it is an organic structure; the house, as well as the collection and manner of displaying <b>(25) it</b> to the visitor, has changed over the years. The changes have coincided with <b>(26) developing</b> concepts of the American arts, increased knowledge on the part of collectors and students, and a progression toward the achievement of a historical effect in period-room displays. The rooms at Winterthur have followed this current, yet still retained the character of a private house.</p>  
                    <p>The concept of a period room as a display technique has developed gradually over the years in an effort to present works of art in a context that would show them to greater effect and would give them more meaning for the viewer. Comparable to the habitat group in a natural history museum, the period room represents the decorative arts in a lively and interesting manner and provides an opportunity to assemble objects related by style, date, or place of manufacture.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "What does the passage mainly discuss?",
                    "pilihan" => [
                        "The reason that Winterthur was redesigned",
                        "Elements that make Winterthur an unusual museum",
                        "How Winterthur compares to English country houses",
                        "Historical furniture contained in Winterthur",
                    ],
                    "jawaban" => "Elements that make Winterthur an unusual museum",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "The phrase <q>devoted to</q> in the text is closest in meaning to ",
                    "pilihan" => [
                        "Surrounded by",
                        "Specializing in",
                        "Successful with",
                        "Sentimental about",
                    ],
                    "jawaban" => "Specializing in",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "What happened at Winterthur between 1929 and 1931?",
                    "pilihan" => [
                        "The owners moved out.",
                        "The house was repaired.",
                        "The old furniture was replaced.",
                        "The estate became a museum.",
                    ],
                    "jawaban" => "The house was repaired.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "What does the author mean by stating <q>The impression of a lived-in house is apparent to the visitor</q> (in the text)?",
                    "pilihan" => [
                        "Winterthur is very old.",
                        "Few people visit Winterthur.",
                        "Winterthur does not look like a typical museum.",
                        "The furniture at Winterthur looks comfortable.",
                    ],
                    "jawaban" => "Winterthur does not look like a typical museum.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "The word <q>assembled</q> in the text Is closest in meaning to",
                    "pilihan" => [
                        "Summoned",
                        "Appreciated",
                        "Brought together",
                        "Fundamentally changed",
                    ],
                    "jawaban" => "Brought together",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "The word <q>it</q> in the text refers to",
                    "pilihan" => [
                        "Winterthur",
                        "Collection",
                        "English country house",
                        "Visitor",
                    ],
                    "jawaban" => "Winterthur",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "The word <q>developing</q> in the text is closest in meaning to",
                    "pilihan" => [
                        "Traditional",
                        "Exhibiting",
                        "Informative",
                        "Evolving",
                    ],
                    "jawaban" => "Evolving",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "According lo the passage, objects in a period room are related by all of (he following EXCEPT",
                    "pilihan" => [
                        "Date",
                        "Style",
                        "Place of manufacture",
                        "Past ownership",
                    ],
                    "jawaban" => "Past ownership",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "What is die relationship between the two paragraphs in the passage?",
                    "pilihan" => [
                        "The second paragraph explains a term that was mentioned in the first paragraph.",
                        "Each paragraph describes a different approach to the display of objects in museum.",
                        "The second paragraph explains a philosophy of art appreciation that contrast with the philosophy explained in me first paragraph.",
                        "Each paragraph describes a different historical period.",
                    ],
                    "jawaban" => "The second paragraph explains a term that was mentioned in the first paragraph.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "Where in the passage does the author explain why displays at Winterthur have changed?",
                    "pilihan" => [
                        "First sentence in paragraph 1",
                        "First sentence in paragraph 2",
                        "Last sentence in paragraph 2",
                        "Last sentence in paragraph 1",
                    ],
                    "jawaban" => "Last sentence in paragraph 1",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>Questions 30-39 </p>
                    <p>The modem comic strip started out as ammunition in a newspaper war between giants of the American press in the late nineteenth century. The first full-color comic strip appeared in January 1894 in the New York <i>World</i>, owned by Joseph Pulitzer. The first regular weekly full-color comic supplement, similar to today's Sunday funnies, appeared two years later, in William Randolph Hearst's rival New York paper, the <i>Morning Journal</i>. <p>
                    <p>Both were immensely popular, and publishers realized that supplementing the news with comic relief boosted the sale of papers. The <i>Morning Journal</i> started another feature in 1896, the <q>Yellow Kid,</q> the first continuous comic character in the United States, whose creator, <b>(33) Richard Outcault, had been lured away from the <i>World</i> by the ambitious Hearst</b>. The <q>Yellow Kid</q> was in many ways a pioneer. Its comic dialogue was the strictly urban farce that came to characterize later strips, and <b>(34) it</b> introduced the speech balloon inside the strip, usually placed above the characters' heads.</p>
                    <p>The first strip to <b>(36) incorporate</b> all the elements of later comics was Rudolph Dirks's <q>Katzenjammer Kids,</q> based on Wilhelm Busch's <i>Max and Moritz</i>, a European satire of the nineteenth century. The <q>Kids</q> strip, first published in 1897, served as the <b>(37) prototype</b> for future American strips. It contained not only speech balloons, but a continuous cast of characters, and was divided into small regular panels that did away with the larger panoramic scenes of most earlier comics.</p>
                    <p>Newspaper syndication played a major role in spreading the popularity of comic strips throughout the country. Though weekly colored comics came first, daily black and-white strips were not far behind. They first appeared in the Chicago <i>American</i> in 1904. It was followed by many imitators, and by 1915 black-and white comic strips had become a <b>(38) staple</b> of daily newspapers around the country.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "What does the passage mainly discuss?",
                    "pilihan" => [
                        "A comparison of two popular comic strips",
                        "The differences between early and modern comic strips",
                        "The effects of newspapers on comic strip stories",
                        "Features of early comic strips in the United States",
                    ],
                    "jawaban" => "Features of early comic strips in the United States",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "Why does the author mention Joseph Pulitzer and William Randolph Hearst? ",
                    "pilihan" => [
                        "They established New York's first newspaper.",
                        "They published comic strips about the newspaper war.",
                        "Their comic strips are still published today.",
                        "They owned major competitive newspapers.",
                    ],
                    "jawaban" => "They owned major competitive newspapers.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "The passage suggests that comic strips were popular for which of the following reasons?",
                    "pilihan" => [
                        "They provided a break from serious news stories.",
                        "Readers enjoyed the unusual drawings.",
                        "Readers could identify with the characters.",
                        "They were about real-life situations.",
                    ],
                    "jawaban" => "They provided a break from serious news stories.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "To say that Richard Outcault had been <q>lured away from</q> the World by Hearst (in the text) means which of the following?",
                    "pilihan" => [
                        "Hearst convinced Outcault to leave the <i>World</i>.",
                        "Hearst fired Outcault from the <i>World</i>.",
                        "Hearst warned Outcault to leave the <i>World</i>.",
                        "Hearst wanted Outcault to work for the <i>World</i>.",
                    ],
                    "jawaban" => "Hearst convinced Outcault to leave the <i>World</i>.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "The word <q>it</q> in the text refer to ",
                    "pilihan" => [
                        "The <q>Yellow Kid</q>",
                        "Dialogue",
                        "Farce",
                        "Balloon",
                    ],
                    "jawaban" => "The <q>Yellow Kid</q>",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "According to the passage, the <q>Yellow Kid</q> was the first comic strip to do all of the following EXCEPT",
                    "pilihan" => [
                        "feature the same character in each episode",
                        "include dialogue inside a balloon",
                        "appear in a Chicago newspaper",
                        "characterize city life in a humorous way",
                    ],
                    "jawaban" => "appear in a Chicago newspaper",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "The word <q>incorporate</q> in the text is closest in meaning to ",
                    "pilihan" => [
                        "Affect",
                        "Create",
                        "Combine",
                        "Mention",
                    ],
                    "jawaban" => "Combine",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "The word <q>prototype</q> in the text is closest in meaning to",
                    "pilihan" => [
                        "Story",
                        "Humor",
                        "Drawing",
                        "Model",
                    ],
                    "jawaban" => "Model",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => "The word <q>staple</q> in the text is closest in meaning to",
                    "pilihan" => [
                        "Regular feature",
                        "Popular edition",
                        "New version",
                        "Huge success",
                    ],
                    "jawaban" => "Regular feature",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "In what order does the author discuss various comic strips in the passage? ",
                    "pilihan" => [
                        "In alphabetical order by title",
                        "In the order in which they were created",
                        "According to the newspaper in which they appeared",
                        "From most popular to least popular",
                    ],
                    "jawaban" => "In the order in which they were created",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>Questions 40-50 </p>
                    <p>Every drop of water in the <b>(40) ocean</b>, even in the deepest parts, responds to the forces that create the tides. No other force that affects the sea is so strong. Compared with the tides, the waves created by the wind are surface movements <b>(41) felt</b> no more than a hundred fathoms below the surface. The currents also seldom involve more than the upper several hundred fathoms despite their impressive sweep. </p>
                    <p>The tides are a response of the waters of the ocean to the pull of the Moon and the more distant Sun. In theory, there is a gravitational attraction between the water and even the outermost star of the universe. <b>(42) In reality</b>, however, the pull of remote stars is so slight as to be obliterated by the control of the Moon and, to a lesser extent, the Sun. Just as the Moon rises later each day by fifty minutes, on the average, so, in most places, the time of high tide is <b>(44) correspondingly</b> later each day. And as the Moon waxes and wanes in its monthly cycle, so the height of the tide varies. The tidal movements are strongest when the Moon is a sliver in the sky, and when it is full. These are the highest flood tides and the lowest ebb tides of the lunar month and are called the spring tides. At these times the Sun, Moon, and Earth are nearly in line and the pull of the two heavenly bodies is added together to bring the water high on the beaches, to send its surf upward against the sea cliffs, and to draw a high tide into the harbors. Twice each month, at the quarters of the Moon, when the Sun, <b>(46) Moon</b> and Earth lie at the apexes of a triangular <b>(47) configuration</b> and the pull of the Sun and Moon are opposed, the moderate tidal movements called neap tides occur. Then the difference between high and low water is less than at any other time during the month.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "The word <q>ocean</q> in the text is closest in meaning to",
                    "pilihan" => [
                        "Sea",
                        "River",
                        "Water",
                        "Ice",
                    ],
                    "jawaban" => "Sea",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 41,
                    "soal" => "What is the main point of the first paragraph?",
                    "pilihan" => [
                        "The waves created by ocean currents are very large.",
                        "Despite the strength of the wind, it only moves surface water.",
                        "Deep ocean water is seldom affected by forces that move water.",
                        "The tides are the most powerful force to affect the movement of ocean water.",
                    ],
                    "jawaban" => "The tides are the most powerful force to affect the movement of ocean water.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 42,
                    "soal" => "The word <q>felt</q> in the text is closest in meaning to ",
                    "pilihan" => [
                        "Based",
                        "Dropped",
                        "Detected",
                        "Explored",
                    ],
                    "jawaban" => "Detected",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 43,
                    "soal" => "The words <q>In reality</q> in the text are closest in meaning to ",
                    "pilihan" => [
                        "Surprisingly",
                        "Actually",
                        "Characteristically",
                        "Similarly",
                    ],
                    "jawaban" => "Actually",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 44,
                    "soal" => "It can be inferred from the passage that the most important factor in determining how much gravitational effect one object in space has on the tides is ",
                    "pilihan" => [
                        "Size",
                        "Distance",
                        "Temperature",
                        "Density",
                    ],
                    "jawaban" => "Distance",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 45,
                    "soal" => "The word <q>correspondingly</q> in the text is closest in meaning to",
                    "pilihan" => [
                        "Unpredictably",
                        "Interestingly",
                        "Similarly",
                        "Unusually",
                    ],
                    "jawaban" => "Similarly",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 46,
                    "soal" => "What is the cause of spring tides? ",
                    "pilihan" => [
                        "Seasonal changes in the weather",
                        "The gravitational pull of the Sun and the Moon when nearly in line with the Earth ",
                        "The Earth's movement around the Sun",
                        "The triangular arrangement of the Earth, Sun, and Moon",
                    ],
                    "jawaban" => "The gravitational pull of the Sun and the Moon when nearly in line with the Earth ",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 47,
                    "soal" => "The word <q>moon</q> in the text is closest in meaning to",
                    "pilihan" => [
                        "Sunlight",
                        "Solar",
                        "Star",
                        "Crescent",
                    ],
                    "jawaban" => "Crescent",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 48,
                    "soal" => "The word <q>configuration</q> in the text is closest in meaning to ",
                    "pilihan" => [
                        "Unit",
                        "Center",
                        "Surface",
                        "Arrangement",
                    ],
                    "jawaban" => "Arrangement",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 49,
                    "soal" => "Neap tides occur when",
                    "pilihan" => [
                        "The Sun counteracts the Moon's gravitational attraction ",
                        "The Moon is full",
                        "The Moon is farthest from the Sun",
                        "Waves created by the wind combine with the Moon's gravitational attraction",
                    ],
                    "jawaban" => "The Sun counteracts the Moon's gravitational attraction ",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 50,
                    "soal" => "According to the passage, all of the following statements about tides are true EXCEPT: ",
                    "pilihan" => [
                        "The time of high tide is later each day.",
                        "Tides have a greater effect on the sea than waves do.",
                        "The strongest tides occur at the quarters of the Moon.",
                        "Neap tides are more moderate than spring tides.",
                    ],
                    "jawaban" => "The strongest tides occur at the quarters of the Moon.",
                ]
            ]
        ];

        return $data;
    }

    public function get_soal_listeningv5(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>SECTION 1</b></center></p>
                    <p><center><b>LISTENING COMPREHENSION</b></center></p>
                    <p><center>Time: Approximately 30 minutes 50 questions</center></p>"
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b>PART A</b></p>
                    <p>In Part A , you will hear short conversations between two speakers. At the end of each conversation, a third voice will ask a question about what was said. The question will be spoken just one time. After you hear a conversation and the question about it, read the four possible anwers and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and mark your answer.</p>"
            ],
            [
                "tipe" => "audio",
                "data" => "v5 1-5.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "",
                    "pilihan" => [
                        "The doctor was too busy to see him.",
                        "He doesn't need to see the doctor.",
                        "The woman should use the ointment.",
                        "His skin condition has gotten worse.",
                    ],
                    "jawaban" => "He doesn't need to see the doctor.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "",
                    "pilihan" => [
                        "Accept the man's offer.",
                        "Walk home.",
                        "Give the man a ride.",
                        "Go for a walk with the man.",
                    ],
                    "jawaban" => "Walk home.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "",
                    "pilihan" => [
                        "The man is mistaken.",
                        "The error will be corrected.",
                        "She didn't know about the problem.",
                        "Grades were sent late.",
                    ],
                    "jawaban" => "The error will be corrected.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "",
                    "pilihan" => [
                        "Thursdays and Fridays.",
                        "Tuesdays and Fridays.",
                        "Wednesdays and Thursdays.",
                        "Tuesdays, Thursdays, and Fridays.",
                    ],
                    "jawaban" => "Thursdays and Fridays.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "",
                    "pilihan" => [
                        "He's sorry he gave the woman the  wrong directions.",
                        "His friend works in the dean's office.",
                        "He can't give the woman directions.",
                        "He's also looking for the dean's office.",
                    ],
                    "jawaban" => "He can't give the woman directions.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v5 6-10.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "",
                    "pilihan" => [
                        "She wants to eat chicken salad.",
                        "The chicken salad is gone.",
                        "She dropped the man's food.",
                        "She'll bring the tuna salad.",
                    ],
                    "jawaban" => "She'll bring the tuna salad.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "",
                    "pilihan" => [
                        "Wait and see how she feels in 24 hours.",
                        "Go home and take her medicine.",
                        "Return to the grocery store to pick up some aspirin.",
                        "Go to the nearby pharmacy.",
                    ],
                    "jawaban" => "Go to the nearby pharmacy.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "",
                    "pilihan" => [
                        "He didn't wear a watch.",
                        "He had trouble getting to the place.",
                        "He didn't want to leave the place.",
                        "He had no idea how far it was.",
                    ],
                    "jawaban" => "He had trouble getting to the place.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "",
                    "pilihan" => [
                        "Joan left it in her shopping cart.",
                        "Kathy got it for Joan.",
                        "Joan picked it up from a student.",
                        "Kathy never mailed it.",
                    ],
                    "jawaban" => "Kathy got it for Joan.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "",
                    "pilihan" => [
                        "He wants to ride with the woman.",
                        "He doesn't have money to buy a car now.",
                        "He doesn't know how to drive a car.",
                        "He'd rather walk to school.",
                    ],
                    "jawaban" => "He doesn't have money to buy a car now.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v5 11-15.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "",
                    "pilihan" => [
                        "Her cousin has just gotten up out of bed.",
                        "Her cousin will be away all week.",
                        "Her cousin will let her stay at his place.",
                        "Her cousin is too busy to spend time with her.",
                    ],
                    "jawaban" => "Her cousin will let her stay at his place.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "",
                    "pilihan" => [
                        "She won't be able to come to dinner.",
                        "She would like to invite the man to the theater.",
                        "She doesn't like to go out on Fridays.",
                        "It was kind of the man to give her the tickets.",
                    ],
                    "jawaban" => "She won't be able to come to dinner.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "",
                    "pilihan" => [
                        "Ask the librarians for help.",
                        "Borrow an article from Dr. Frazier.",
                        "Ask Dr. Frazier for a reference.",
                        "Find a quieter place to study.",
                    ],
                    "jawaban" => "Ask the librarians for help.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "",
                    "pilihan" => [
                        "He doesn't want to take the course.",
                        "He doesn't know anyone who has taken the course.",
                        "He thinks the course requirements are unfair.",
                        "He has a general understanding of the course requirements.",
                    ],
                    "jawaban" => "He has a general understanding of the course requirements.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "",
                    "pilihan" => [
                        "Frustrated because he cannot see the manager immediately.",
                        "Afraid of the manager.",
                        "Pleased with the manager's style.",
                        "Sorry he arrived too late to see the manager.",
                    ],
                    "jawaban" => "Frustrated because he cannot see the manager immediately.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v5 16-20.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "",
                    "pilihan" => [
                        "Make a copy of his notes for her.",
                        "Ask his professor for help.",
                        "Attend the review sessions.",
                        "Go to the chemistry lab this evening.",
                    ],
                    "jawaban" => "Attend the review sessions.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "",
                    "pilihan" => [
                        "The woman may be exhibiting too many paintings.",
                        "He's pleased the woman has her own show.",
                        "He's willing to help the woman get ready for the show.",
                        "He'll let the woman exhibit some of his paintings.",
                    ],
                    "jawaban" => "He's willing to help the woman get ready for the show.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "",
                    "pilihan" => [
                        "Drop out of school.",
                        "Take fewer courses.",
                        "Graduate early.",
                        "Study more seriously.",
                    ],
                    "jawaban" => "Take fewer courses.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "",
                    "pilihan" => [
                        "Calculate how much each project will cost.",
                        "Take time to relax.",
                        "Discuss her stress with the project leader.",
                        "Decide which project is most urgent.",
                    ],
                    "jawaban" => "Decide which project is most urgent.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "",
                    "pilihan" => [
                        "The man shouldn't wear his glasses in class.",
                        "The man's glasses may be too weak.",
                        "The man shouldn't sit so close to the board.",
                        "The man's glasses are no longer in style.",
                    ],
                    "jawaban" => "The man's glasses may be too weak.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v5 21-25.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "",
                    "pilihan" => [
                        "She isn't interested in being a historian.",
                        "She hasn't chosen a course of study.",
                        "She's studying American history.",
                        "She's a very good student.",
                    ],
                    "jawaban" => "She hasn't chosen a course of study.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "",
                    "pilihan" => [
                        "He wishes the weather were warmer.",
                        "He's not sure when spring officially begins.",
                        "He often feels tired during the winter.",
                        "He has no time to enjoy the spring weather.",
                    ],
                    "jawaban" => "He wishes the weather were warmer.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "",
                    "pilihan" => [
                        "Move out of the South Dorm.",
                        "Find a bigger room.",
                        "Look for a room in the South Dorm.",
                        "Stay where she lives now.",
                    ],
                    "jawaban" => "Look for a room in the South Dorm.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "",
                    "pilihan" => [
                        "Sally rarely borrows money.",
                        "Sally rarely repays loans quickly.",
                        "Sally has had a lot of expenses lately.",
                        "He's never lent Sally any money.",
                    ],
                    "jawaban" => "Sally rarely repays loans quickly.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "",
                    "pilihan" => [
                        "He has a new job at the tennis court.",
                        "He no longer likes to play tennis.",
                        "He's too busy to give tours of the campus.",
                        "He hasn't had a chance to play tennis lately.",
                    ],
                    "jawaban" => "He hasn't had a chance to play tennis lately.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v5 26-30.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "",
                    "pilihan" => [
                        "The woman worked hard in the course.",
                        "Taking the course is a great experience.",
                        "The woman's experience made it unnecessary for her to take the course.",
                        "He knew that the woman had taken the course before.",
                    ],
                    "jawaban" => "The woman's experience made it unnecessary for her to take the course.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "",
                    "pilihan" => [
                        "She'll make an appointment at the clinic later.",
                        "The clinic will be closed this afternoon.",
                        "She's already seen the doctor once today.",
                        "She plans to be immunized this afternoon.",
                    ],
                    "jawaban" => "She plans to be immunized this afternoon.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "",
                    "pilihan" => [
                        "His desire to be an accountant isn't strong enough.",
                        "He doesn't have the skills necessary for accounting.",
                        "She's better at arithmetic than he is.",
                        "He has always been good at arithmetic.",
                    ],
                    "jawaban" => "He doesn't have the skills necessary for accounting.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "",
                    "pilihan" => [
                        "The man should have used citations from the journals.",
                        "The library has very few anthropology journals.",
                        "The journal collection is large as well.",
                        "She can't find the anthropology journals.",
                    ],
                    "jawaban" => "The journal collection is large as well.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "",
                    "pilihan" => [
                        "Her brother insisted that she help with his plumbing.",
                        "She refused to fix her brother's faucet.",
                        "She didn't know about her brother's problem.",
                        "Her brother helped her repair the plumbing.",
                    ],
                    "jawaban" => "Her brother insisted that she help with his plumbing.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>PART B</b></center></p>
                    <p>DIRECTION</p>
                    <p>In Part B, you will hear longer conversation, after each conversation, you will be asked some question. The conversation and question will be spoken just one time. They will not be written out for you, so you will have to listen carefully in order to understand and remember what the speakers says.</p>
                    <p>When you hear a question, read the four possible answers in your test book and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and fill in the space that corresponds to the letter of the answer you have chosen.</p>"
            ],
            [
                "tipe" => "audio",
                "data" => "v5 31-35.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "",
                    "pilihan" => [
                        "With a knife.",
                        "On the edge of some metal.",
                        "On some glass.",
                        "On a piece of paper.",
                    ],
                    "jawaban" => "On a piece of paper.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "",
                    "pilihan" => [
                        "How much the cut hurt.",
                        "How deep the cut was.",
                        "How easily he was cut.",
                        "How concerned the woman was.",
                    ],
                    "jawaban" => "How much the cut hurt.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "",
                    "pilihan" => [
                        "The amount of skin affected by the cut.",
                        "The cause of the cut.",
                        "The amount of bleeding.",
                        "The number of nerve endings irritated.",
                    ],
                    "jawaban" => "The number of nerve endings irritated.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "",
                    "pilihan" => [
                        "Take a pain reliever.",
                        "Let the cut dry out.",
                        "Keep the cut closed.",
                        "Go to a doctor.",
                    ],
                    "jawaban" => "Keep the cut closed.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "",
                    "pilihan" => [
                        "Keep it elevated.",
                        "Put a bandage on it.",
                        "Clean it.",
                        "Ignore it.",
                    ],
                    "jawaban" => "Put a bandage on it.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v5 36-38.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "",
                    "pilihan" => [
                        "The presence of life-forms far below the Earth's surface.",
                        "The risk of infection from rare strains of bacteria.",
                        "Fictional representations of a hidden underground world.",
                        "The reliability of evidence collected by new drilling methods.",
                    ],
                    "jawaban" => "The presence of life-forms far below the Earth's surface.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "",
                    "pilihan" => [
                        "Its texture.",
                        "Its size.",
                        "Its preservation.",
                        "Its shape.",
                    ],
                    "jawaban" => "Its size.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => "",
                    "pilihan" => [
                        "The bacteria would be killed by the human immune system.",
                        "The bacteria would die if brought to the surface.",
                        "Many antidotes and remedies are available.",
                        "Drilling operations are always closely monitored.",
                    ],
                    "jawaban" => "The bacteria would die if brought to the surface.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>PART C</b></center></p>
                    <p>DIRECTION</p>
                    <p>In Part C, You will hear several talks. After each talk, you will be asked some questions. The talks and questions will be spoken just one time. They will not be written out for you, so you will have to listen carefully in order to understand and remember what the speaker says.</p>
                    <p>When you hear a question, read the four possible answers in your test book and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and fill in the space that corresponds to the letter of the answer you have choosen.</p>"
            ],
            [
                "tipe" => "audio",
                "data" => "v5 39-42.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "",
                    "pilihan" => [
                        "That babies understand language before they can speak.",
                        "That babies have simple Mathematical skills.",
                        "Babies' preferences for different kinds of toys.",
                        "The influence of television on babies.",
                    ],
                    "jawaban" => "That babies have simple Mathematical skills.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "",
                    "pilihan" => [
                        "Staring at the dolls longer.",
                        "Crying loudly.",
                        "Blinking their eyes rapidly.",
                        "Reaching for the dolls.",
                    ],
                    "jawaban" => "Staring at the dolls longer.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 41,
                    "soal" => "",
                    "pilihan" => [
                        "They're born with the ability.",
                        "They're exceptionally intelligent.",
                        "They learned it from playing with dolls.",
                        "They've learned it from their parents.",
                    ],
                    "jawaban" => "They're born with the ability.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 42,
                    "soal" => "",
                    "pilihan" => [
                        "Language acquisition may be negatively affected.",
                        "Babies used in experiments often develop emotional problems.",
                        "Parents may force their children to learn at too early an age.",
                        "Early coaching will interfere with creativity.",
                    ],
                    "jawaban" => "Parents may force their children to learn at too early an age.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v5 43-46.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 43,
                    "soal" => "",
                    "pilihan" => [
                        "To describe Jefferson's role in history.",
                        "To introduce a tour of Jefferson's home.",
                        "To train a group of architects.",
                        "To raise money for the Monticello Historical Society.",
                    ],
                    "jawaban" => "To introduce a tour of Jefferson's home.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 44,
                    "soal" => "",
                    "pilihan" => [
                        "They knew each other.",
                        "Palladio designed buildings in Virginia.",
                        "Jefferson studied in Italy.",
                        "Jefferson read books on Palladio's work.",
                    ],
                    "jawaban" => "Jefferson read books on Palladio's work.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 45,
                    "soal" => "",
                    "pilihan" => [
                        "He made his house too large.",
                        "He constructed a fence around his property.",
                        "He built his house on a mountain.",
                        "He transported unnecessary materials.",
                    ],
                    "jawaban" => "He built his house on a mountain.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 46,
                    "soal" => "",
                    "pilihan" => [
                        "It provides a good view of the area.",
                        "It's surrounded by several towns.",
                        "It's accessible to major roads.",
                        "It's near a nature preserve.",
                    ],
                    "jawaban" => "It provides a good view of the area.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v5 47-50.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 47,
                    "soal" => "",
                    "pilihan" => [
                        "Mr. Richardson.",
                        "The university president.",
                        "A new committee member.",
                        "The committee chairperson.",
                    ],
                    "jawaban" => "The committee chairperson.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 48,
                    "soal" => "",
                    "pilihan" => [
                        "They sold T-shirts.",
                        "They sold photographs.",
                        "They had a garden party.",
                        "They ran tours of the nursery.",
                    ],
                    "jawaban" => "They sold T-shirts.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 49,
                    "soal" => "",
                    "pilihan" => [
                        "It was the only nursery in their price range.",
                        "It was nearest the university.",
                        "They had worked with the nursery before.",
                        "Mr. Richardson was a friend of the committee chairperson.",
                    ],
                    "jawaban" => "They had worked with the nursery before.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 50,
                    "soal" => "",
                    "pilihan" => [
                        "Review the budget.",
                        "Visit Richardson's Nursery.",
                        "Listen to a speech by the university president.",
                        "Conduct a tree-planting ceremony.",
                    ],
                    "jawaban" => "Review the budget.",
                ]
            ],
        ];

        return $data;
    }

    public function get_soal_structurev5(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>SECTION 2</b></center></p>
                    <p><center><b>STRUCTURE AND WRITTEN EXPRESSION</b></center></p>
                    <p><center>Time: 30 minutes</center></p>
                    <p><center>40 questions</center></p>
                    <p>DIRECTIONS</p>
                    <p>Questions number 1-15 are incomplete sentences. Beneath each sentence you will see four words or phrases, marked (A), (B), (C), and (D). Choose the one word of phrase that best complets the sentence. Then, on your answer sheet, find the number of the question and fill in the space that corresponds to the letter of the answer you have chosen. Fill in the space so that the letter inside the oval cannot be seen.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "Dairy farming is ….. leading agricultural activity in the United States.",
                    "pilihan" => [
                        "A",
                        "At",
                        "Then",
                        "None",
                    ],
                    "jawaban" => "A",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "Although thunder and lightening are produced at the same time, light waves travel faster ....., so we see the lightening before we hear the thunder.",
                    "pilihan" => [
                        "Than sound waves do",
                        "Than sound waves are",
                        "Do sound waves",
                        "Sound waves",
                    ],
                    "jawaban" => "Than sound waves do",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "Beef cattle ….. of all livestock for economic growth in certain geographic regions.",
                    "pilihan" => [
                        "The most are important",
                        "Are the most important",
                        "The most important are",
                        "That are the most important",
                    ],
                    "jawaban" => "Are the most important",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "The discovery of the halftone process in photography in 1881 made it ..… photographs in books and newspapers.",
                    "pilihan" => [
                        "The possible reproduction",
                        "Possible to reproduce",
                        "The possibility of reproducing",
                        "Possibly reproduce",
                    ],
                    "jawaban" => "Possible to reproduce",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "Flag Day is a legal holiday only in the state of Pennsylvania ….. Betsy Ross sewed the first American flag.",
                    "pilihan" => [
                        "Which",
                        "Where",
                        "That",
                        "Has",
                    ],
                    "jawaban" => "Where",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => " .....Vastness of the Grand Canyon, it is difficult to capture it in a single photograph.",
                    "pilihan" => [
                        "While the",
                        "The",
                        "For the",
                        "Because of the",
                    ],
                    "jawaban" => "Because of the",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "Speciation, ..… results when an animal population becomes isolated by some factor, usually geographic.",
                    "pilihan" => [
                        "Form biological species",
                        "Biological species are formed",
                        "Which forming biological species",
                        "The formation of biological species",
                    ],
                    "jawaban" => "The formation of biological species",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "In its pure state antimony has no important uses, but  ..… with other substances, it is extremely useful metal.",
                    "pilihan" => [
                        "When combined physically or chemically",
                        "Combined when physically or chemically",
                        "The physically and chemically combination",
                        "It is combined physically and chemically",
                    ],
                    "jawaban" => "When combined physically or chemically",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "The dawn redwood appears ….. some 100 million years ago in northern forests around the world. ",
                    "pilihan" => [
                        "was flourished",
                        "having to flourished",
                        "to have flourished",
                        "have flourished ",
                    ],
                    "jawaban" => "to have flourished",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "Beginning in the Middle Ages, composers of Western music used a system of notating their compositions ….. be performed by musicians. ",
                    "pilihan" => [
                        "will",
                        "that",
                        "and when to",
                        "so they could",
                    ],
                    "jawaban" => "so they could",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "Civil Rights are the freedoms and rights ..... as a member of a community, state, or nation. ",
                    "pilihan" => [
                        "may have a person",
                        "may have a person who",
                        "a person may have",
                        "and a person may have",
                    ],
                    "jawaban" => "a person may have",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "Richard Wright enjoyed success and influence ..... among Black American writers of his era. ",
                    "pilihan" => [
                        "were unparalleled",
                        "are unparalleled",
                        "unparalleled",
                        "the unparalleled",
                    ],
                    "jawaban" => "unparalleled",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => " of large mammals once dominated the North American Prairies: the American bison and the pronghorn antelope. ",
                    "pilihan" => [
                        "There are two species",
                        "With two species",
                        "Two species are",
                        "Two species",
                    ],
                    "jawaban" => "Two species",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "Franklin D. Roosevelt was ..... the great force of radio and the opportunity it provided for taking government policies directly to the people. ",
                    "pilihan" => [
                        "as the first President he understood fully",
                        "the first President that, to fully understand",
                        "the first President fully understand",
                        "the first President to understand fully",
                    ],
                    "jawaban" => "the first President to understand fully",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "During the late fifteenth century, ..... of the native societies of America had professions in the fields of arts and crafts.",
                    "pilihan" => [
                        "only a few",
                        "a few but",
                        "few, but only",
                        "a few only",
                    ],
                    "jawaban" => "only a few",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "The <u>firstly</u> naval battle of the Revolutionary War <u>was</u> fought <u>off</u> the coast of Machias, Maine,<u>in</u> June 1775. ",
                    "pilihan" => [
                        "firstly",
                        "was",
                        "off",
                        "in",
                    ],
                    "jawaban" => "firstly",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "The <u>public ceremonies</u> of the Plains Indians are <u>lesser</u> elaborate <u>than those</u> of the Navajo in <u>the</u> Southwest. ",
                    "pilihan" => [
                        "public ceremonies",
                        "lesser",
                        "than those",
                        "the",
                    ],
                    "jawaban" => "lesser",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "In <u>some</u> species of fish, <u>such the</u> three-spined stickleback, the male, not the female, <u>performs</u> the task of <u>caring</u> for the young. ",
                    "pilihan" => [
                        "some",
                        "such the",
                        "performs",
                        "caring",
                    ],
                    "jawaban" => "such the",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "When she <u>retires</u> in September 1989, <u>tennis champion</u> Christine Evert was <u>the most</u> famous <u>woman athlete</u> in the United States. ",
                    "pilihan" => [
                        "retires",
                        "tennis champion",
                        "the most",
                        "woman athlete",
                    ],
                    "jawaban" => "retires",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "u>The</u> ancient Romans used vessels <u>equipped</u> with sails <u>and</u> banks of oars <u>to transporting</u> their armies. ",
                    "pilihan" => [
                        "The",
                        "equipped",
                        "and",
                        "to transporting",
                    ],
                    "jawaban" => "to transporting",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "Dinosaurs <u>are</u> traditionally classified as cold-blooded reptiles, <u>but</u> recent evidence based on eating habits, posture, and skeletal <u>structural</u> suggests some <u>may have been</u> warm-blooded. ",
                    "pilihan" => [
                        "are",
                        "but",
                        "structural",
                        "may have been",
                    ],
                    "jawaban" => "structural",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "Since the Great Depression of the 1930’ s, social <u>programs</u> such as Social Security have <u>been built</u> into the economy <u>to help</u> avert <u>severity</u> business declines. ",
                    "pilihan" => [
                        "programs",
                        "been built",
                        "to help",
                        "severity",
                    ],
                    "jawaban" => "severity",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "In the 1970’s <u>consumer</u> activities <u>succeeded in</u> promoting laws that set <u>safety</u> standards for automobiles, children’ s clothing, and a <u>widely</u> range of household products. ",
                    "pilihan" => [
                        "consumer",
                        "succeeded in",
                        "safety",
                        "widely",
                    ],
                    "jawaban" => "widely",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "Zoos in New Orleans, San Diego, Detroit, and the Bronx <u>have become</u> biological parks <u>where</u> animals <u>roams free</u> and people <u>watch from</u> across a moat. ",
                    "pilihan" => [
                        "have become",
                        "where",
                        "roams free",
                        "watch from",
                    ],
                    "jawaban" => "roams free",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "In human beings, as in other <u>mammals</u>, hairs <u>around</u> the eyes are ears and in the nose <u>prevent</u> dust, insects, and other matter from <u>entering</u> these organs. ",
                    "pilihan" => [
                        "mammals",
                        "around",
                        "prevent",
                        "entering",
                    ],
                    "jawaban" => "mammals",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "The Rocky Mountains <u>were</u> explored <u>by</u> fur traders during the early 1800’ s in <u>a</u> decades <u>preceding</u> the United States Civil War. ",
                    "pilihan" => [
                        "were",
                        "by",
                        "a",
                        "preceding",
                    ],
                    "jawaban" => "a",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "The works of the <u>author</u> Herman Melville are <u>literary</u> creations of a high order, blending <u>fact</u>, fiction, adventure, and subtle <u>symbolic</u>. ",
                    "pilihan" => [
                        "author",
                        "literary",
                        "fact",
                        "symbolic",
                    ],
                    "jawaban" => "symbolic",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "Each chemical element is characterized <u>to</u> the number of protons that an atom of <u>that</u> element contains, <u>called</u> <u>its</u> atomic number. ",
                    "pilihan" => [
                        "to",
                        "that",
                        "called",
                        "its",
                    ],
                    "jawaban" => "that",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "The body structure that <u>developed</u> in birds over <u>millions</u> of years <u>is</u> well designed for flight, <u>being</u> both lightly in weight and remarkably strong. ",
                    "pilihan" => [
                        "developed",
                        "millions",
                        "is",
                        "being",
                    ],
                    "jawaban" => "being",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "u>From</u> 1905 to 1920, American novelist Edith Wharton <u>was</u> at the height of her writing career, publishing <u>of her</u> three <u>most</u> famous novels. ",
                    "pilihan" => [
                        "From",
                        "was",
                        "of her",
                        "most",
                    ],
                    "jawaban" => "of her",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "In the early twentieth century, there was considerable <u>interesting</u> among sociologists in the fact <u>that</u> in the United States <u>the family</u> was losing its <u>traditional</u> roles. ",
                    "pilihan" => [
                        "interesting",
                        "that",
                        "the family",
                        "traditional",
                    ],
                    "jawaban" => "interesting",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "u>Although</u> pure diamond is colorless and transparent, <u>when</u> contaminated with other material <u>it</u> may appear in various <u>color</u>, ranging from pastels to opaque black. ",
                    "pilihan" => [
                        "Although",
                        "when",
                        "it",
                        "color",
                    ],
                    "jawaban" => "color",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "Comparative anatomy is <u>concerned</u> to the <u>structural</u> differences <u>among</u> animal <u>forms</u>.",
                    "pilihan" => [
                        "concerned",
                        "structural",
                        "among",
                        "forms",
                    ],
                    "jawaban" => "concerned",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "A seismograph records oscillation of the ground <u>caused by</u> seismic waves, vibrations that <u>travel</u> from <u>its</u> point of origin <u>through</u> the Earth or along its surface. ",
                    "pilihan" => [
                        "caused by",
                        "travel",
                        "its",
                        "through",
                    ],
                    "jawaban" => "its",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "Electric lamps came into widespread use during the early 1900’s and <u>have replaced</u> other <u>type</u> of fat, gas, or <u>oil</u> lamps for <u>almost every</u> purpose. ",
                    "pilihan" => [
                        "have replaced",
                        "type",
                        "oil",
                        "almost every",
                    ],
                    "jawaban" => "type",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "Located in Canada, the Columbia Icefield <u>covers area</u> of 120 square miles <u>and</u> is 3,300 feet <u>thick</u> in some <u>places</u>. ",
                    "pilihan" => [
                        "covers area",
                        "and",
                        "thick",
                        "places",
                    ],
                    "jawaban" => "covers area",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "Composer Richard Rodgers and lyricist Oscar Hammerstein II <u>brought to</u> the musical <i>Oklahoma!</i> <u>extensive</u> musical and theatrical backgrounds as well as <u>familiar</u> with the <u>traditional</u> forms of Operetta and musical comedy. ",
                    "pilihan" => [
                        "brought to",
                        "extensive",
                        "familiar",
                        "traditional",
                    ],
                    "jawaban" => "familiar",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => "Because of <u>its</u> vast tracts of <u>virtually</u> uninhabited northern forest, Canada has <u>one</u> of the lowest population <u>density</u> in the world. ",
                    "pilihan" => [
                        "its",
                        "virtually",
                        "one",
                        "density",
                    ],
                    "jawaban" => "density",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "Rice, <u>which it still</u> forms the staple diet of <u>much</u> of the world’ s population, grows <u>best</u> in <u>hot</u>, wet lands. ",
                    "pilihan" => [
                        "which it still",
                        "much",
                        "best",
                        "hot",
                    ],
                    "jawaban" => "which it still",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "Government money appropriated <u>for art</u> in the 1930’ s made possible <u>hundreds of</u> murals and statues still <u>admiration</u> in small towns <u>all over</u> the United States.",
                    "pilihan" => [
                        "for art",
                        "hundreds of",
                        "admiration",
                        "all over",
                    ],
                    "jawaban" => "admiration",
                ]
            ],
        ];

        return $data;
    }

    public function get_soal_readingv5(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>SECTION 3</b></center></p>
                    <p><center><b>READING COMPREHENSION</b></center></p>
                    <p><center>Time : 60 Minutes</center></p>
                    <p><center>50 Questions</center></p>
                    <p>DIRECTIONS</p>
                    <p>In this section, you will read a number of passages. Each one is followed by approximately ten questions about it. For 1-50, chose the one best answer, (A), (B), (C), and (D), to each question. Then, find the number of the question on your answer sheet, and fill in the space that corresponds to the letter of the answer you have choosen. Answer all of the questions following a passage on the basis of what is stated in that passage.</p>"
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>Question 1- 10 </p>
                    <p>The conservatism of the early English colonists in North America, their strong <b>(1) attachment to</b> the English way of doing things, would play a major part in the furniture that was made in New England. The very tools that the first New England furniture makers used were, after all, not much different from those used for centuries – even millennia: basic hammers, saws, chisels, planes, augers, compasses, and measures. These were the tools used more or less by all people who worked with wood: carpenters, barrel makers, and shipwrights. At most the furniture makers might have had planes with special edges or more delicate chisels, but there could not have been much specialization in the early years of the colonies.</p>
                    <p>The furniture makers in those early decades of the 1600’ s were known as “joiners,” for the primary method of constructing furniture, at least among the English of this   time, was that of mortise-and-tenon joinery. The mortise is the hole chiseled and cut into one piece of wood, while the tenon is the tongue or <b>(2) protruding</b> element shaped from another piece of wood so that it fits into the mortise; and another small hole is then drilled (with the auger) through the mortised end and the tenon so that a whittled peg can secure the joint – thus the term “joiner.” Panels were fitted into slots on the basic frames. This kind of construction was used for making everything from houses to chests. </p>
                    <p>Relatively little hardware was used during this period. Some nails – forged by hand – were used, but no screws or glue. Hinges were often made of leather, but metal hinges were also used. The cruder varieties were made by blacksmiths in the colonies, but the finer metal elements were imported. Locks and escutcheon plates – the latter to <b>(7) shield</b> the wood from the metal key – would often be imported. </p>
                    <p>Above all, what the early English colonists imported was their knowledge of, familiarity with, and dedication to the traditional types and designs of furniture <b>(8) they</b> knew in England.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 1,
                    "soal" => "The phrase “attachment to” in the text is closest in meaning to ",
                    "pilihan" => [
                        "Control of",
                        "Distance from",
                        "Curiosity about",
                        "Preference for",
                    ],
                    "jawaban" => "Preference for",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 2,
                    "soal" => "The word “protruding” in the text is closest in meaning to",
                    "pilihan" => [
                        "Parallel",
                        "Simple",
                        "Projecting",
                        "Important",
                    ],
                    "jawaban" => "Projecting",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 3,
                    "soal" => "The relationship of a mortise and a tenon is most similar to that of ",
                    "pilihan" => [
                        "A lock and a key",
                        "A book and its cover",
                        "A cup and a saucer",
                        "A hammer and a nail",
                    ],
                    "jawaban" => "A lock and a key",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 4,
                    "soal" => "For what purpose did woodworkers use an auger ",
                    "pilihan" => [
                        "To whittle a peg",
                        "To make a tenon",
                        "To drill a hole",
                        "To measure a panel",
                    ],
                    "jawaban" => "To drill a hole",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 5,
                    "soal" => "Which of the following were NOT used in the construction of colonial furniture?",
                    "pilihan" => [
                        "Mortises",
                        "Nails",
                        "Hinges",
                        "Screws",
                    ],
                    "jawaban" => "Screws",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 6,
                    "soal" => "The author implies that colonial metalworkers were ",
                    "pilihan" => [
                        "Unable to make elaborate parts",
                        "More skilled than woodworkers",
                        "More conservative than other colonists",
                        "Frequently employed by joiners",
                    ],
                    "jawaban" => "Unable to make elaborate parts",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 7,
                    "soal" => "The word “ shield” in the text is closest in meaning to ",
                    "pilihan" => [
                        "Decorate",
                        "Copy",
                        "Shape",
                        "Protect",
                    ],
                    "jawaban" => "Protect",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 8,
                    "soal" => "The word “ they” in the text refers to",
                    "pilihan" => [
                        "Designs",
                        "Types",
                        "Colonists",
                        "All",
                    ],
                    "jawaban" => "Colonists",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 9,
                    "soal" => "The author implies that the colonial joiners ",
                    "pilihan" => [
                        "Were highly paid",
                        "Based their furniture on English models",
                        "Used many specialized tools",
                        "Had to adjust to using new kinds of wood in New England",
                    ],
                    "jawaban" => "Based their furniture on English models",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 10,
                    "soal" => "Which of the following terms does the author explain in the passage? ",
                    "pilihan" => [
                        "“millennia” (paragraph 1)",
                        "“joiners” (paragraph 2)",
                        "“blacksmiths” (paragraph 3)",
                        "“colonists” (paragraph 4)",
                    ],
                    "jawaban" => "“joiners” (paragraph 2)",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>Question 11 – 20 </p>
                    <p>In addition to their military role, the forts of the nineteenth century provided numerous other benefits for the American West. The establishment of these posts opened new roads and provided for the protection of <b>(12) daring</b> adventurers and expeditions as well as established settlers. Forts also served as bases where enterprising entrepreneurs could bring commerce to the West, providing supplies and refreshments to soldiers as well as to pioneers. Posts like Fort Laramie provided supplies for wagon trains traveling the     natural highways toward new frontiers. Some posts became stations for the pony express; still <b>(14) others</b>, such as Fort Davis, were stagecoach stops for weary travelers. All    of these functions, of course, suggest that the contributions of the forts to the civilization and development of the West extended beyond patrol duty.</p>
                    <p>Through the establishment of military posts, yet other contributions were made to the development of western culture. Many posts maintained libraries or reading rooms, and some – for example, Fort Davis – had schools. Post chapels provided a setting for religious services and weddings. Throughout the wilderness, post bands provided entertainment and <b>(15) boosted</b> morale. During the last part of the nineteenth century, to reduce expenses, gardening was encouraged at the forts, thus making experimental  agriculture another activity of the military. The military stationed at the various forts also played a role in civilian life by assisting in maintaining order, and civilian officials often called on the army for protection.</p>
                    <p>Certainly, among other significant contributions the army made to the improvement of the conditions of life was the investigation of the relationships among health, climate, and architecture. From the earliest colonial times throughout the nineteenth century, disease ranked as the foremost problem in defense. It slowed construction of forts and <b>(18) inhibited</b> their military functions. Official documents from many regions contained innumerable reports of sickness that virtually incapacitated entire garrisons. In response to the problems, detailed observations of architecture and climate and their relationships to the frequency of the occurrence of various diseases were recorded at various posts across the nation by military surgeons.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 11,
                    "soal" => "Which of the following statements best expresses the main idea of the passage?",
                    "pilihan" => [
                        "By the nineteenth century, forts were no longer used by the military.",
                        "Surgeons at forts could not prevent outbreaks of disease.",
                        "Forts were important to the development of the American West",
                        "Life in nineteenth-century forts was very rough.",
                    ],
                    "jawaban" => "Forts were important to the development of the American West",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 12,
                    "soal" => "The word “daring” in the text is closest in meaning to",
                    "pilihan" => [
                        "Lost",
                        "Bold",
                        "Lively",
                        "Foolish",
                    ],
                    "jawaban" => "Bold",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 13,
                    "soal" => "Which of the following would a traveler be likely be LEAST likely to obtain at Fort Laramie? ",
                    "pilihan" => [
                        "Fresh water",
                        "Food",
                        "Formal clothing",
                        "Lodging",
                    ],
                    "jawaban" => "Formal clothing",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 14,
                    "soal" => "The word “others” in the text refers to  ",
                    "pilihan" => [
                        "Posts",
                        "Wagon trains",
                        "Frontiers",
                        "Highways",
                    ],
                    "jawaban" => "Posts",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 15,
                    "soal" => "The word “boosted” in the text is closest in meaning to ",
                    "pilihan" => [
                        "Influenced",
                        "Established",
                        "Raised",
                        "Maintained",
                    ],
                    "jawaban" => "Raised",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 16,
                    "soal" => "Which of the following is the most likely inference about the decision to promote gardening at forts? ",
                    "pilihan" => [
                        "It was expensive to import produce from far away.",
                        "Food brought in from outside was often spoiled",
                        "Gardening was a way to occupy otherwise idle soldiers.",
                        "The soil near the forts was very fertile.",
                    ],
                    "jawaban" => "It was expensive to import produce from far away.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 17,
                    "soal" => "According to the passage, which of the following posed the biggest obstacle to the development of military forts? ",
                    "pilihan" => [
                        "Insufficient shelter",
                        "Shortage of materials",
                        "Attacks by wild animals",
                        "Illness",
                    ],
                    "jawaban" => "Illness",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 18,
                    "soal" => "The word “inhibited” in the text is closest in meaning to ",
                    "pilihan" => [
                        "Involved",
                        "Exploited",
                        "United",
                        "Hindered",
                    ],
                    "jawaban" => "Hindered",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 19,
                    "soal" => "How did the military assists in the investigation of health problems? ",
                    "pilihan" => [
                        "By registering annual birth and death rates",
                        "By experiments with different building materials",
                        "By maintaining records of diseases and potential causes",
                        "By monitoring the soldiers’ diets",
                    ],
                    "jawaban" => "By maintaining records of diseases and potential causes",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 20,
                    "soal" => "The author organizes the discussion of forts by ",
                    "pilihan" => [
                        "Describing their locations",
                        "Comparing their sizes",
                        "Explaining their damage to the environment",
                        "listing their contributions to western life",
                    ],
                    "jawaban" => "listing their contributions to western life",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>Question 21 – 30 </p>
                    <p>Anyone who has handled a fossilized bone knows that it is usually not exactly like its modern <b>(22) counterpart</b>, the most obvious difference being that it is often much heavier. Fossils often have the quality of stone rather than of organic materials, and this has led to the use of the term “petrifaction” (to bring about rock). The implication is that bone, and other tissues, have somehow been turned into stone, and this is certainly the explanation given in some texts. But it is wrong interpretation; fossils are frequently so dense because the <b>(24) pores</b> and other spaces in the bone have become filled with minerals taken up from the surrounding sediments. Some fossil bones have all the interstitial spaces filled with foreign minerals, including the marrow cavity, if there is one, while others have taken up but little from their surroundings. Probably all of the minerals deposited within the bone have been recrystallized from solution by the action of water percolating thru them. The degree of mineralization appears to be determined by the nature of the environment in which the bone was deposited and not by the antiquity of the bone. For example, the black fossil bones that are so common in many parts of Florida are heavily mineralized, but they are only about 20,000 years old, whereas many of the dinosaur bones from western Canada, which are about 75 million years old, are only partially filled in. Under optimum conditions the process of mineralization probably takes thousands rather than millions of years, perhaps considerably less. </p>
                    <p>The amount of change that has occurred in fossil bone, even in bone as old as that of dinosaurs, is often remarkably small. We are therefore usually able to see the microscopic structures of the bone, including such fine details as the lacunae where the living bone cells once resided. The natural bone mineral, the hydroxyapatite, is virtually unaltered too – <b>(28) it</b> has the same crystal structure as that of modern bone. Although nothing remains of the original collagen, some of its component amino acids   are usually still <b>(29) detectable</b>, together with amino acids of the noncollagen proteins of bone.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 21,
                    "soal" => "What does the passage mainly discuss?",
                    "pilihan" => [
                        "The location of fossils in North America",
                        "The composition of fossils",
                        "Determining the size and weight of fossils",
                        "Procedures for analyzing fossils",
                    ],
                    "jawaban" => "The composition of fossils",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 22,
                    "soal" => "The word “counterpart” in the text is closest in meaning to",
                    "pilihan" => [
                        "Species",
                        "Version",
                        "Change",
                        "Material",
                    ],
                    "jawaban" => "Version",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 23,
                    "soal" => "Why is fossilized bone heavier than ordinary bone? ",
                    "pilihan" => [
                        "Bone tissue solidifies with age.",
                        "The marrow cavity gradually fills with water",
                        "The organic materials turn to stone",
                        "Spaces within the bone fill with minerals.",
                    ],
                    "jawaban" => "Spaces within the bone fill with minerals.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 24,
                    "soal" => "The word “pores” in the text is closest in meaning to:",
                    "pilihan" => [
                        "Joints",
                        "Tissues",
                        "Lines",
                        "Holes",
                    ],
                    "jawaban" => "Holes",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 25,
                    "soal" => "What can be inferred about a fossil with a high degree of mineralization?",
                    "pilihan" => [
                        "It was exposed to large amounts of mineral-laden water throughout time.",
                        "Mineralization was complete within one year of the animal’ s death.",
                        "Many colorful crystals can be found in such a fossil.",
                        "It was discovered in western Canada.",
                    ],
                    "jawaban" => "It was exposed to large amounts of mineral-laden water throughout time.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 26,
                    "soal" => "Which of the following factors is most important in determining the extent of mineralization in fossil bones? ",
                    "pilihan" => [
                        "The age of fossil",
                        "Environmental conditions",
                        "The location of the bone in the animal’ s body.",
                        "The type of animal the bone came from",
                    ],
                    "jawaban" => "Environmental conditions",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 27,
                    "soal" => "Why does the author compare fossils found in western Canada to those found in Florida? ",
                    "pilihan" => [
                        "To prove that a fossil’ s age cannot be determined by the amount of mineralization.",
                        "To discuss the large quantity of fossils found in both places",
                        "To suggest that fossils found in both places were the same age.",
                        "To explain why scientists are especially interested in Canadian fossils",
                    ],
                    "jawaban" => "To prove that a fossil’ s age cannot be determined by the amount of mineralization.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 28,
                    "soal" => "The word “ it” in the text refers to ",
                    "pilihan" => [
                        "Hydroxyapatite",
                        "Microscopic structure",
                        "Crystal structure",
                        "Modern bone",
                    ],
                    "jawaban" => "Hydroxyapatite",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 29,
                    "soal" => "The word “detectable” in line 26 is closest in meaning to ",
                    "pilihan" => [
                        "Sizable",
                        "Active",
                        "Moist",
                        "Apparent",
                    ],
                    "jawaban" => "Apparent",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 30,
                    "soal" => "Which of the following does NOT survive in fossils? ",
                    "pilihan" => [
                        "Noncollagen proteins",
                        "Hydroxyapatite",
                        "Collagen",
                        "Amino acid",
                    ],
                    "jawaban" => "Collagen",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>Question 31 – 40 </p>
                    <p>In the last third of the nineteenth century a new housing form was quietly being developed. In 1869 the Stuyvesant, considered New York’ s first apartment house was   built on East Eighteenth Street. The building was financed by the developer Rutherfurd Line Stuyvesant and designed by Richard Morris Hunt, the first American architect to graduate from the Ecole des Beaux Arts in Paris. Each man had lived in Paris, and each understood the economics and social potential of this Parisian housing form. But the Stuyvesant was at best a limited success. In spite of Hunt’ s <b>(32) inviting</b> façade, the living space was awkwardly arranged. Those who could afford them were quite content to remain in the more <b>(34) sumptuous</b>, single-family homes, leaving the Stuyvesant to young married couples and bachelors. </p>
                    <p>The fundamental problem with the Stuyvesant and the other early apartment buildings that quickly followed, in the 1870’ s and early 1880’ s was that they were confined to the typical New York building lot. That lot was a rectangular area 25 feet wide by 100   feet deep – a shape perfectly suited for a row house. The lot could also accommodate a rectangular tenement, though it could not <b>(38) yield</b> the square, well-lighted, and logically arranged rooms that great apartment buildings require. But even with the awkward interior configurations of the early apartment buildings, the idea caught on. It met the needs of a large and growing population that wanted something better than tenements but could not afford or did not want row houses.</p>
                    <p>So while the city’ s newly emerging social leadership commissioned their mansions,apartment houses and hotels began to sprout in multiple lots, thus breaking the initial space constraints. In the closing decades of the nineteenth century, large apartment houses began dotting the developed portions of New York City, and by the opening decades of the twentieth century, spacious buildings, such as the Dakota and the Ansonia finally transcended the tight confinement of row house building lots. From there it was only a small step to building luxury apartment houses on the newly created Park Avenue right next to the fashionable Fifth Avenue shopping area.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 31,
                    "soal" => "The new housing form discussed in passage refers to",
                    "pilihan" => [
                        "Single-family homes",
                        "Apartment buildings",
                        "Row houses",
                        "Hotels",
                    ],
                    "jawaban" => "Apartment buildings",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 32,
                    "soal" => "The word “inviting” in the text is closest in meaning to",
                    "pilihan" => [
                        "Open",
                        "Encouraging",
                        "Attractive",
                        "Asking",
                    ],
                    "jawaban" => "Attractive",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 33,
                    "soal" => "Why was the Stuyvesant a limited success? ",
                    "pilihan" => [
                        "The arrangement of the rooms was not convenient.",
                        "Most people could not afford to live there.",
                        "There were no shopping areas nearby.",
                        "It was in a crowded neighborhood.",
                    ],
                    "jawaban" => "The arrangement of the rooms was not convenient.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 34,
                    "soal" => "The word “sumptuous” in the text is closest in meaning to ",
                    "pilihan" => [
                        "Luxurious",
                        "Unique",
                        "Modern",
                        "Distant",
                    ],
                    "jawaban" => "Luxurious",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 35,
                    "soal" => "It can be inferred that the majority of people who lived in New York’s first apartments were",
                    "pilihan" => [
                        "Highly educated",
                        "Unemployed",
                        "Wealthy",
                        "Young",
                    ],
                    "jawaban" => "Young",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 36,
                    "soal" => "It can be inferred that a New York apartment building in the 1870’ s and 1880’ s had all of the following characteristics EXCEPT:  ",
                    "pilihan" => [
                        "Its room arrangement was not logical.",
                        "It was rectangular.",
                        "It was spacious inside.",
                        "It had limited light.",
                    ],
                    "jawaban" => "It was spacious inside.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 37,
                    "soal" => "The word “ yield” in the text is closest in meaning to ",
                    "pilihan" => [
                        "Harvest",
                        "Surrender",
                        "Amount",
                        "Provide",
                    ],
                    "jawaban" => "Provide",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 38,
                    "soal" => "Why did the idea of living in an apartment become popular in the late 1800’ s? ",
                    "pilihan" => [
                        "Large families needed housing with sufficient space.",
                        "Apartments were preferable to tenements and cheaper than row houses",
                        "The city officials of New York wanted housing that was centrally located.",
                        "The shape of early apartments could accommodate a variety of interior designs.",
                    ],
                    "jawaban" => "Apartments were preferable to tenements and cheaper than row houses",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 39,
                    "soal" => "The author mentions the Dakota and the Ansonia in paragraph 3 because",
                    "pilihan" => [
                        "They are examples of large, welldesigned apartment buildings",
                        "Their design is similar to that of row houses",
                        "They were built on a single building lot",
                        "They are famous hotels",
                    ],
                    "jawaban" => "They are examples of large, welldesigned apartment buildings",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 40,
                    "soal" => "The word “ newly” in the text is closest in meaning to ",
                    "pilihan" => [
                        "Rather",
                        "Usually",
                        "Sometime",
                        "Just",
                    ],
                    "jawaban" => "Just",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p>Question 41 – 50 </p>
                    <p>A snowfall consists of myriads of <b>(42) minute</b> ice crystals that fall to the ground in the form of frozen precipitation. The formation of snow begins with these ice crystals in the subfreezing strata of the middle and upper atmosphere when there is an adequate supply of moisture present. At the core of every ice crystal is a minuscule nucleus, a solid particle of matter around which moisture condenses and freezes. Liquid water droplets floating in the supercooled atmosphere and free ice crystals cannot coexist within the same cloud, since the vapor pressure of ice is less than that of water. This enables the ice crystals to rob the liquid droplets of their moisture and grow continuously. The process can be very rapid, quickly creating sizable ice crystals, some of which <b>(44) adhere</b> to each other to create a cluster of ice crystals or a snowflake. Simple flakes possess a variety of beautiful forms, usually hexagonal, though the symmetrical shapes reproduced in most microscope photography of snowflakes are not usually found in actual snowfalls. Typically, snowflakes in actual snowfall consists of broken fragments and clusters of adhering ice crystals.</p>
                    <p>For a snowfall to continue once <b>(46) it</b> starts, there must be a constant inflow of moisture to supply the nuclei. This moisture is supplied by the passage of an airstream over a water surface and its subsequent lifting to higher regions of the atmosphere. The Pacific Ocean is the source of moisture for most snowfalls west of the Rocky Mountains, while the Gulf of Mexico and the Atlantic Ocean feed water vapor into the air currents over the central and eastern sections of the United States. Other geographical features also can be the source of moisture for some snowstorms. For example, areas adjacent to the Great Lakes experience their own unique lake-effect storms, employing a variation of the process on a local scale. In addition, mountainous section or rising terrain can <b>(49) initiate</b> snowfalls by the geographical lifting of a moist airstream.</p>"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 41,
                    "soal" => "Which of the following questions does author answer in the first paragraph?",
                    "pilihan" => [
                        "Why are snowflakes hexagonal?",
                        "What is the optimum temperature for snow?",
                        "In which months does most snow fall?",
                        "How are snowflakes formed?.",
                    ],
                    "jawaban" => "How are snowflakes formed?.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 42,
                    "soal" => "The word “minute” in the text is closest in meaning to",
                    "pilihan" => [
                        "Tiny",
                        "Quick",
                        "Clear",
                        "Sharp",
                    ],
                    "jawaban" => "Tiny",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 43,
                    "soal" => "What is at the center of an ice crystal? ",
                    "pilihan" => [
                        "A small snowflake",
                        "A nucleus",
                        "A drop of water",
                        "A hexagon",
                    ],
                    "jawaban" => "A nucleus",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 44,
                    "soal" => "The word “adhere” in the text is closest in meaning to",
                    "pilihan" => [
                        "Belong",
                        "Relate",
                        "Stick",
                        "Speed",
                    ],
                    "jawaban" => "Stick",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 45,
                    "soal" => "What is the main topic of the second paragraph?",
                    "pilihan" => [
                        "How ice crystals form",
                        "How moisture affects temperature",
                        "What happens when ice crystals melt",
                        "Where the moisture to supply the nuclei comes from",
                    ],
                    "jawaban" => "Where the moisture to supply the nuclei comes from",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 46,
                    "soal" => "The word “it” in the text refers to",
                    "pilihan" => [
                        "Snowfall",
                        "Snowflake",
                        "Cluster",
                        "Moisture",
                    ],
                    "jawaban" => "Snowfall",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 47,
                    "soal" => "What is necessary for a snowfall to persist?",
                    "pilihan" => [
                        "A decrease in the number of snowflakes",
                        "Lowered vapor pressure in ice crystals",
                        "A continuous infusion of moisture",
                        "A change in the direction of the airstream",
                    ],
                    "jawaban" => "A continuous infusion of moisture",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 48,
                    "soal" => "How do lake-effect snowstorms form?",
                    "pilihan" => [
                        "Water temperature drop below freezing.",
                        "Moisture rises from a lake into the airstream.",
                        "Large quantities of wet air come off a nearby mountain.",
                        "Millions of ice crystals form on the surface of a large lake.",
                    ],
                    "jawaban" => "Moisture rises from a lake into the airstream.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 49,
                    "soal" => "The word “initiate” in the text is closest in meaning to",
                    "pilihan" => [
                        "Enhance",
                        "Alter",
                        "Increase",
                        "Begin",
                    ],
                    "jawaban" => "Begin",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => 50,
                    "soal" => "Which of the following could account for the lack of snowfall in a geographical location close to mountains and a major water source?",
                    "pilihan" => [
                        "Ground temperatures below the freezing point",
                        "Too much moisture in the air",
                        "Too much wind off the mountains",
                        "Atmospheric temperatures above the freezing point.",
                    ],
                    "jawaban" => "Atmospheric temperatures above the freezing point.",
                ]
            ],
        ];

        return $data;
    }

    public function get_soal_listeningv6(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>SECTION 1</b></center></p>
                    <p><center><b>LISTENING COMPREHENSION</b></center></p>
                    <p><center>Time: Approximately 30 minutes 50 questions</center></p>
                    <p><b>PART A</b></p>
                    <p>In Part A , you will hear short conversations between two speakers. At the end of each conversation, a third voice will ask a question about what was said. The question will be spoken just one time. After you hear a conversation and the question about it, read the four possible anwers and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and mark your answer.</p>
                "
            ],
            [
                "tipe" => "audio",
                "data" => "v6 1-5.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "1",
                    "soal" => "	",
                    "pilihan" => [
                        "July",
                        "June",
                        "May",
                        "April",
                    ],
                    "jawaban" => "July",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "2",
                    "soal" => "	",
                    "pilihan" => [
                        "Chapmans.",
                        "Philadelphia",
                        "Doctors",
                        "Arizona",
                    ],
                    "jawaban" => "Philadelphia",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "3",
                    "soal" => "	",
                    "pilihan" => [
                        "The woman was wise to have copied her data.",
                        "Dana has a copy of manual in the back office.",
                        "It's very good computer.",
                        "He'll see if he can get the computer going.",
                    ],
                    "jawaban" => "The woman was wise to have copied her data.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "4",
                    "soal" => "	",
                    "pilihan" => [
                        "A gas station.",
                        "A police station.",
                        "A lost-an-found department.",
                        "A bar.",
                    ],
                    "jawaban" => "A gas station.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "5",
                    "soal" => "	",
                    "pilihan" => [
                        "Jason Daniels isn't home right now.",
                        "Jason Daniels can't come to the phone right now.",
                        "The caller dialed the wrong number",
                        "Jason Daniels doesn't want to speak to the caller.",
                    ],
                    "jawaban" => "The caller dialed the wrong number",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v6 6-10.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "6",
                    "soal" => "	",
                    "pilihan" => [
                        "She's on a committe.",
                        "She exercises to much.",
                        "She's trying to budget her sleep.",
                        "She's been working late.",
                    ],
                    "jawaban" => "She's been working late.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "7",
                    "soal" => "	",
                    "pilihan" => [
                        "better",
                        "Fine",
                        "Sick",
                        "Tired",
                    ],
                    "jawaban" => "Fine",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "8",
                    "soal" => "	",
                    "pilihan" => [
                        "No, because it's not for sale",
                        "Yes, if he borrows the money from the woman.",
                        "Yes, because he has plenty of money.",
                        "No, because he didn't bring enough money.",
                    ],
                    "jawaban" => "Yes, if he borrows the money from the woman.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "9",
                    "soal" => "	",
                    "pilihan" => [
                        "Canada.",
                        "Europe.",
                        "Where the speakers are.",
                        "California.",
                    ],
                    "jawaban" => "Canada.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "10",
                    "soal" => "	",
                    "pilihan" => [
                        "Her car is being repaired at the gas station.",
                        "She has gone to get her gas tank filled with gasoline.",
                        "Frank is going to the gas station to pick up her car.",
                        "Her car isn't working properly because of the type of gasoline that she is using.",
                    ],
                    "jawaban" => "She has gone to get her gas tank filled with gasoline.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v6 11-15.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "11",
                    "soal" => "	",
                    "pilihan" => [
                        "They didn't know about the meeting.",
                        "They didn't let anybody know about the meeting, so nobody attended.",
                        "They didn't want to attend the meeting, but they did anyway.",
                        "Although they knew there was going to be a meeting, they didn't come.",
                    ],
                    "jawaban" => "They didn't know about the meeting.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "12",
                    "soal" => "	",
                    "pilihan" => [
                        "His classmated made good grades, but he didn't.",
                        "He is an exceptionally good student.",
                        "He made the best grade in his class.",
                        "He is on of the better students in his class.",
                    ],
                    "jawaban" => "His classmated made good grades, but he didn't.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "13",
                    "soal" => "	",
                    "pilihan" => [
                        "The dean was asked to question several students",
                        "The humanities professor question several students.",
                        "The humanities professor was able to answer the student's questions.",
                        "The humanities professor has asked the dean a question about the some students.",
                    ],
                    "jawaban" => "The dean was asked to question several students",
                ]
            ],
                
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "14",
                    "soal" => "	",
                    "pilihan" => [
                        "Ask for assistance.",
                        "Leave early.",
                        "Refuse to work.",
                        "Request to work overtime.",
                    ],
                    "jawaban" => "Ask for assistance.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "15",
                    "soal" => "	",
                    "pilihan" => [
                        "He didn't go to the concert because he had too much work to do.",
                        "He want to the concert because he didn't want to work.",
                        "Although he had a lot of work to do, he went to the concert.",
                        "He never goes to a concert if he work to do.",
                    ],
                    "jawaban" => "He didn't go to the concert because he had too much work to do.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v6 16-20.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "16",
                    "soal" => "	",
                    "pilihan" => [
                        "He may keep the library books longer.",
                        "He had to pay a late fee for the books.",
                        "He is going to the new library to look for some books.",
                        "He lost the librabry's new books.",
                    ],
                    "jawaban" => "He may keep the library books longer.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "17",
                    "soal" => "	",
                    "pilihan" => [
                        "He is afraid to start smoking because of the hazardous effects.",
                        "He is afraid to He'l become fat if he stops smoking.",
                        "He is afraid that he will become more nervous if he stops smoking.",
                        "He doesn't realize the possible dangers of smoking.",
                    ],
                    "jawaban" => "He is afraid to He'l become fat if he stops smoking.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "18",
                    "soal" => "	",
                    "pilihan" => [
                        "He studies regularly, but his grade are suffering.",
                        "He hasn't studied lately but will likely get good grades.",
                        "He is so lazy that he never gets good grades.",
                        "He probabaly will not pass because he hasn't studied.",
                    ],
                    "jawaban" => "He hasn't studied lately but will likely get good grades.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "19",
                    "soal" => "	",
                    "pilihan" => [
                        "His meat wasn't tender.",
                        "The speaker did not have a good character.",
                        "It was difficult to meet new people in the crowd.",
                        "He has to come to the meeting.",
                    ],
                    "jawaban" => "His meat wasn't tender.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "20",
                    "soal" => "	",
                    "pilihan" => [
                        "He never forgets when he has a meeting",
                        "He should have canceled the meeting.",
                        "He has to come to the meeting.",
                        "It seems that he forgot about their meeting.",
                    ],
                    "jawaban" => "It seems that he forgot about their meeting.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v6 21-25.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "21",
                    "soal" => "	",
                    "pilihan" => [
                        "Fruit.",
                        "Vegetables.",
                        "Meat.",
                        "Cookies.",
                    ],
                    "jawaban" => "Fruit.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "22",
                    "soal" => "	",
                    "pilihan" => [
                        "They went to St. Augustine.",
                        "They couldn't afford a honeymoon",
                        "They went to St. Augustine.",
                        "They are still planning on going to Puerto Rico.",
                    ],
                    "jawaban" => "They went to St. Augustine.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "23",
                    "soal" => "	",
                    "pilihan" => [
                        "Hot dogs originated in the United States.",
                        "The  first hot dog came from Germany.",
                        "Some hot dogs are made from reindeer meat.",
                        "Even countries like Finland have a food similar to hot dogs.",
                    ],
                    "jawaban" => "Hot dogs originated in the United States.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "24",
                    "soal" => "	",
                    "pilihan" => [
                        "He has a flat tire.",
                        "He has no work to do.",
                        "He has no time to relax.",
                        "His work is too simple to keep him interested.",
                    ],
                    "jawaban" => "He has no time to relax.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "25",
                    "soal" => "	",
                    "pilihan" => [
                        "Tiffany is younger than Stephanie.",
                        "Tiffany is older than Stephanie.",
                        "Tiffany and Stephanie are sisters.",
                        "Tiffany is Stephanie's mother.",
                    ],
                    "jawaban" => "Tiffany is older than Stephanie.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v6 26-30.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "26",
                    "soal" => "	",
                    "pilihan" => [
                        "To repair it himself.",
                        "To find out what it will probably cost before the work is done.",
                        "To find a different repairman.",
                        "To find out how long it will take to repair the car.",
                    ],
                    "jawaban" => "To find out what it will probably cost before the work is done.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "27",
                    "soal" => "	",
                    "pilihan" => [
                        "She is writing a TV script.",
                        "She wrote her paper last night while she was watching TV.",
                        "She didn't watch TV last night because she had to write a paper.",
                        "She watched TV last night instead of working on her paper.",
                    ],
                    "jawaban" => "She watched TV last night instead of working on her paper.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "28",
                    "soal" => "	",
                    "pilihan" => [
                        "Franklin admired the deer's beauty from his bedroom window.",
                        "Franklin closed the door quikly.",
                        "Franklin shot a deer with a  rifle.",
                        "Franklin took a photograph of a deer.",
                    ],
                    "jawaban" => "Franklin took a photograph of a deer.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "29",
                    "soal" => "	",
                    "pilihan" => [
                        "Start typing immediately.",
                        "Change her topic.",
                        "Find a different typing service.",
                        "Have her paper typed by somebody else.",
                    ],
                    "jawaban" => "Have her paper typed by somebody else.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "30",
                    "soal" => "	",
                    "pilihan" => [
                        "Yolanda injured Anna.",
                        "Yolanda had to run downtown last week.",
                        "Yolanda went downtown to excercise.",
                        "Yolanda met Anna downtown unexpetedly",
                    ],
                    "jawaban" => "Yolanda met Anna downtown unexpetedly",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>PART B</b></center></p>
                    <p>DIRECTION</p>
                    <p>In Part B, you will hear longer conversation, after each conversation, you will be asked some question. The conversation and question will be spoken just one time. They will not be written out for you, so you will have to listen carefully in order to understand and remember what the speakers says.</p>
                    <p>When you hear a question, read the four possible answers in your test book and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and fill in the space that corresponds to the letter of the answer you have chosen.</p>
                "
            ],
            [
                "tipe" => "audio",
                "data" => "v6 31-34.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "31",
                    "soal" => "	",
                    "pilihan" => [
                        "He fell out of the plane",
                        "He had many broken bones",
                        "They thought he was dead",
                        "He was crazy",
                    ],
                    "jawaban" => "He fell out of the plane",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "32",
                    "soal" => "	",
                    "pilihan" => [
                        "In a hospital",
                        "On the ground",
                        "On television",
                        "On a plane",
                    ],
                    "jawaban" => "On television",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "33",
                    "soal" => "	",
                    "pilihan" => [
                        "He fell out of a plane.",
                        "His two parachutes didn't open.",
                        "He fell while walking.",
                        "A parachute fell on him.",
                    ],
                    "jawaban" => "His two parachutes didn't open.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "34",
                    "soal" => "	",
                    "pilihan" => [
                        "He went crazy.",
                        "He broke his leg.",
                        "He died.",
                        "He jumped from a plane again.",
                    ],
                    "jawaban" => "He jumped from a plane again.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v6 35-38.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "35",
                    "soal" => "	",
                    "pilihan" => [
                        "Pharmacist-customer.",
                        "Teacher-student.",
                        "Doctor-patient.",
                        "Dentist-patient.",
                    ],
                    "jawaban" => "Doctor-patient.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "36",
                    "soal" => "	",
                    "pilihan" => [
                        "In a few days.",
                        "Before leaving the office.",
                        "Very slowly.",
                        "Soon enough.",
                    ],
                    "jawaban" => "Before leaving the office.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "37",
                    "soal" => "	",
                    "pilihan" => [
                        "Filling her lungs with air.",
                        "Exhaling slowly.",
                        "Some tests.",
                        "Some medicine.",
                    ],
                    "jawaban" => "Some medicine.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "38",
                    "soal" => "	",
                    "pilihan" => [
                        "She has a little congestion.",
                        "She's exhaling too slowly.",
                        "She didn't do well in her tests.",
                        "She does not have enough air in her lungs.",
                    ],
                    "jawaban" => "She has a little congestion.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b><center>PART C</center></b></p>
                    <p>DIRECTION</p>
                    <p>In Part C, You will hear several talks. After each talk, you will be asked some questions. The talks and questions will be spoken just one time. They will not be written out for you, so you will have to listen carefully in order to understand and remember what the speaker says.</p>
                    <p>When you hear a question, read the four possible answers in your test book and decide which one would be the best answer to the question you have heard. Then, on your answer sheet, find the number of the problem and fill in the space that corresponds to the letter of the answer you have choosen.</p>
                "
            ],
            [
                "tipe" => "audio",
                "data" => "v6 39-42.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "39",
                    "soal" => "	",
                    "pilihan" => [
                        "2",
                        "3",
                        "5",
                        "7",
                    ],
                    "jawaban" => "3",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "40",
                    "soal" => "	",
                    "pilihan" => [
                        "They ran out of gas.",
                        "Some fishermen spotted them.",
                        "Their families finally found them.",
                        "They attracted the attention of a private airplane.",
                    ],
                    "jawaban" => "They attracted the attention of a private airplane.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "41",
                    "soal" => "	",
                    "pilihan" => [
                        "It was starting to get dark.",
                        "They knew that they had run out of fuel.",
                        "Their families had reported them missing.",
                        "They hadn't met the private airplane when it was due to arrive.",
                    ],
                    "jawaban" => "Their families had reported them missing.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "42",
                    "soal" => "	",
                    "pilihan" => [
                        "2 miles.",
                        "5 miles.",
                        "7½ miles.",
                        "15 miles.",
                    ],
                    "jawaban" => "7½ miles.",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v6 43-45.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "43",
                    "soal" => "	",
                    "pilihan" => [
                        "Pharmacist",
                        "Doctor",
                        "Patient",
                        "Nurse",
                    ],
                    "jawaban" => "Patient",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "44",
                    "soal" => "	",
                    "pilihan" => [
                        "She took some pain killers.",
                        "She talked with a chiropractor.",
                        "She read the x-rays.",
                        "She did some back stretching exercises.",
                    ],
                    "jawaban" => "She read the x-rays.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "45",
                    "soal" => "	",
                    "pilihan" => [
                        "Six weeks",
                        "Six months",
                        "Three weeks",
                        "Three month",
                    ],
                    "jawaban" => "Three weeks",
                ]
            ],
            [
                "tipe" => "audio",
                "data" => "v6 46-50.mp3"
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "46",
                    "soal" => "	",
                    "pilihan" => [
                        "A painter.",
                        "An art critic.",
                        "A friend of Dali.",
                        "A museum guide.",
                    ],
                    "jawaban" => "A museum guide.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "47",
                    "soal" => "	",
                    "pilihan" => [
                        "Perfume.",
                        "Furniture.",
                        "Jewelry.",
                        "Leather goods.",
                    ],
                    "jawaban" => "Leather goods.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "49",
                    "soal" => "	",
                    "pilihan" => [
                        "21",
                        "31",
                        "41",
                        "51",
                    ],
                    "jawaban" => "21",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "48",
                    "soal" => "	",
                    "pilihan" => [
                        "Gala.",
                        "Lincoln.",
                        "Columbus.",
                        "A toreador.",
                    ],
                    "jawaban" => "Gala.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "50",
                    "soal" => "	",
                    "pilihan" => [
                        "The discovery of America bu Christoper Columbus",
                        "Crucifixion",
                        "Ecumenical Council",
                        "Hallucinogenic Toreodor.",
                    ],
                    "jawaban" => "Crucifixion",
                ]
            ],
        ];

        return $data;
    }

    public function get_soal_structurev6(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>STRUCTURE AND WRITTEN EXPRESSION</b></center></p>
                    <p><center>Time: 25 minutes</center></p>
                    <p><center>40 questions</center></p>
                    <p>DIRECTIONS</p>
                    <p>Questions number 1-15 are incomplete sentences. Beneath each sentence you will see four words or phrases, marked (A), (B), (C), and (D). Choose the one word of phrase that best complets the sentence. Then, on your answer sheet, find the number of the question and fill in the space that corresponds to the letter of the answer you have chosen. Fill in the space so that the letter inside the oval cannot be seen.</p>
                "
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "1",
                    "soal" => "	The attorney told his client that .......................",
                    "pilihan" => [
                        "the case was of small chance to win",
                        "they had little chance of winning the case",
                        "it was nearly impossible to win him the case",
                        "the case had a minimum chance to be won by him",
                    ],
                    "jawaban" => "they had little chance of winning the case",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "2",
                    "soal" => "	One of the professor's greatest atributes is .......................",
                    "pilihan" => [
                        "when he gives lectures",
                        "his ability to lecture",
                        "the way to give lectures",
                        "how in the manner that he lectures",
                    ],
                    "jawaban" => "his ability to lecture",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "3",
                    "soal" => "	 The bank sent a notice to its customers which contained .......................",
                    "pilihan" => [
                        "a reminder that the interest rates would rise the following",
                        "to remember that the interest rates were going up next month.",
                        "a reminder that a raise in interest rates were to raise the following.",
                        "a remembrance that interest rates were to raise the following month.",
                    ],
                    "jawaban" => "a reminder that the interest rates would rise the following",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "4",
                    "soal" => "	 ....................... was the day before yesterday.",
                    "pilihan" => [
                        "Frence's Independence Day",
                        "French's Independence Day",
                        "The France's Independence Day",
                        "The day of the Frence independence",
                    ],
                    "jawaban" => "Frence's Independence Day",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "5",
                    "soal" => "	 It was not until she had arrived home ....................... remembered her appointment with the doctor",
                    "pilihan" => [
                        "she",
                        "and she",
                        "that she",
                        "When she",
                    ],
                    "jawaban" => "When she",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "6",
                    "soal" => "	George would certainly have attended the proceedings .......................",
                    "pilihan" => [
                        "had the tire not flattened itself",
                        "had he not had a flat tire",
                        "if the flat tire hadn't happened",
                        "If he didn't get a flat tire",
                    ],
                    "jawaban" => "had he not had a flat tire",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "7",
                    "soal" => "	....................... received law degrees as today",
                    "pilihan" => [
                        "Woman who have never",
                        "The woman aren't ever",
                        "Never have so many woman",
                        "Never so many woman have",
                    ],
                    "jawaban" => "Never have so many woman",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "8",
                    "soal" => "	The students liked that professor's course because .......................",
                    "pilihan" => [
                        "there was little or no homework",
                        "of there wasn't a great amount of homework",
                        "not alot of homework",
                        "there was few if any homework",
                    ],
                    "jawaban" => "there was little or no homework",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "9",
                    "soal" => "	George ....................... he could improve his test scores, but he did not have enough time to study.",
                    "pilihan" => [
                        "knew how to",
                        "knew how that",
                        "knew how",
                        "knew to",
                    ],
                    "jawaban" => "knew how",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "10",
                    "soal" => "	......................., He would have come to class.",
                    "pilihan" => [
                        "If Mike had been able to to finish his homework",
                        "If Mike could finish his homework",
                        "Would Mike be able to finish his homework",
                        "If Mike is able to finish his homework",
                    ],
                    "jawaban" => "If Mike had been able to to finish his homework",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "11",
                    "soal" => "	Lee contributed fifty dollars, but he wishes he could contribute.......................",
                    "pilihan" => [
                        "more fifty dollars",
                        "another fifty",
                        "the same amount also",
                        "one other fifty dollars",
                    ],
                    "jawaban" => "another fifty",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "12",
                    "soal" => "	The people at the party were worried about Janet because no one was aware .......................",
                    "pilihan" => [
                        "the place",
                        "of the place where",
                        "of where",
                        "where that",
                    ],
                    "jawaban" => "of where",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "13",
                    "soal" => "	Since he changed profession, Fred's yearly income has .......................",
                    "pilihan" => [
                        "just about gone up three times",
                        "almost grown by three times",
                        "got almost three times bigger",
                        "nearly tripled",
                    ],
                    "jawaban" => "nearly tripled",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "14",
                    "soal" => "	Nancy hasn't begun working on her Ph.D. ....................... working on her master's",
                    "pilihan" => [
                        "still while she is already",
                        "yet because she is still",
                        "yet as result she is still",
                        "Still because she is yet",
                    ],
                    "jawaban" => "yet because she is still",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "15",
                    "soal" => "	The director of this organization must know .......................",
                    "pilihan" => [
                        "money mangement, selling, the idea of being able to satisfy the stockholder",
                        "how to manage money, sell his product, and satisfy stockholders",
                        "how to manage money, selling his product, and be able to satisfy stockholders",
                        "money mangement, selling, and able to satisfy the stockholder",
                    ],
                    "jawaban" => "how to manage money, sell his product, and satisfy stockholders",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "16",
                    "soal" => "	The artist tried <u>stimulate</u> <u>interest in</u> painting <u>by taking</u> his students <u>to the</u> museum.",
                    "pilihan" => [
                        "stimulate",
                        "interest in",
                        "by taking",
                        "to the",
                    ],
                    "jawaban" => "stimulate",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "17",
                    "soal" => "	<u>While</u> they <u>were</u> away at the beach, they allowed <u>their neighboards</u> <u>use</u> barbeque grill.",
                    "pilihan" => [
                        "While",
                        "were",
                        "their neighboards",
                        "use",
                    ],
                    "jawaban" => "use",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "18",
                    "soal" => "	Today was <u>such beautiful</u> day that I couldn't bring <u>myself</u> <u>to complete</u> all <u>my chores</u>.",
                    "pilihan" => [
                        "such beautiful",
                        "myself",
                        "to complete",
                        "my chores",
                    ],
                    "jawaban" => "such beautiful",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "19",
                    "soal" => "	They are <u>planning on</u> <u>attending</u> the converntion <u>next</u> month, and <u>so I am</u>.",
                    "pilihan" => [
                        "planning on",
                        "attending",
                        "next",
                        "so I am",
                    ],
                    "jawaban" => "so I am",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "20",
                    "soal" => "	She wishes that we <u>didn't send</u> <u>her the candy</u> yesterday <u>because</u> she is <u>on</u> a diet.",
                    "pilihan" => [
                        "didn't send",
                        "her the candy",
                        "because",
                        "on",
                    ],
                    "jawaban" => "didn't send",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "21",
                    "soal" => "	The <u>athlete</u>, together <u>with</u> <u>his coach</u> and several relatives, <u>are</u> traveling to the Olympic Games.",
                    "pilihan" => [
                        "athlete",
                        "with",
                        "his coach",
                        "are",
                    ],
                    "jawaban" => "are",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "22",
                    "soal" => "	Each <u>of the</u> nurses <u>report</u> to the operating room when <u>his or her name</u> <u>is called</u>.",
                    "pilihan" => [
                        "of the",
                        "report",
                        "his or her name",
                        "is called",
                    ],
                    "jawaban" => "report",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "23",
                    "soal" => "	<u>Before</u> she moved here, Ailine had <u>been</u> president <u>of the</u> organization <u>since</u> for years.",
                    "pilihan" => [
                        "Before",
                        "been",
                        "of the",
                        "since",
                    ],
                    "jawaban" => "since",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "24",
                    "soal" => "	Nancy said <u>that</u> she <u>went</u> <u>to</u> the supermarket <u>before coming</u>.",
                    "pilihan" => [
                        "that",
                        "went",
                        "to",
                        "before coming",
                    ],
                    "jawaban" => "went",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "25",
                    "soal" => "	Mumps <u>are</u> a very <u>common disease</u> <u>which</u> <u>usually</u> affects children.",
                    "pilihan" => [
                        "are",
                        "common disease",
                        "which",
                        "usually",
                    ],
                    "jawaban" => "are",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "26",
                    "soal" => "	Profesor Duncan <u>teaches</u> <u>both</u> <u>anthropology</u> as well as sociology <u>each fall</u>.",
                    "pilihan" => [
                        "teaches",
                        "both",
                        "anthropology",
                        "each fall",
                    ],
                    "jawaban" => "both",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "27",
                    "soal" => "	My brother is <u>in</u> California <u>on</u> vacation, but I wish he <u>was</u> here so that he could help <u>me repair my car</u>.",
                    "pilihan" => [
                        "in",
                        "on",
                        "was",
                        "me repair my car",
                    ],
                    "jawaban" => "was",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "28",
                    "soal" => "	I <u>certainly</u> appreciate <u>him</u> <u>telling us</u> about the daily in <u>delivering</u> the materials because he had planned to begin work tomorrow.",
                    "pilihan" => [
                        "certainly",
                        "him",
                        "telling us",
                        "delivering",
                    ],
                    "jawaban" => "him",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "29",
                    "soal" => "	The chemistry instructor explained the experiment <u>in</u> <u>such of a way</u> that it <u>was</u> <u>easily understood</u>.",
                    "pilihan" => [
                        "in",
                        "such of a way",
                        "was",
                        "easily understood",
                    ],
                    "jawaban" => "such of a way",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "30",
                    "soal" => "	Rudolp Nureyew <u>has become</u> one of the <u>greatest</u> <u>dancer</u> that the ballet world has <u>ever known</u>.",
                    "pilihan" => [
                        "has become",
                        "greatest",
                        "dancer",
                        "ever known",
                    ],
                    "jawaban" => "dancer",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "31",
                    "soal" => "	The harder he <u>tried</u>, the <u>worst</u> he <u>danced</u> before the <u>large</u> audience.",
                    "pilihan" => [
                        "tried",
                        "worst",
                        "danced",
                        "large",
                    ],
                    "jawaban" => "worst",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "32",
                    "soal" => "	When Keith visited Alaska, he <u>lived</u> in <u>a</u> igloo in the winter <u>months</u> <u>as well</u> as in the spring.",
                    "pilihan" => [
                        "lived",
                        "a",
                        "months",
                        "as well",
                    ],
                    "jawaban" => "a",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "33",
                    "soal" => "	The girls <u>were sorry</u> to <u>had missed</u> the singers <u>when</u> they <u>arrived at</u> the airport.",
                    "pilihan" => [
                        "were sorry",
                        "had missed",
                        "when",
                        "arrived at",
                    ],
                    "jawaban" => "had missed",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "34",
                    "soal" => "	Keith is one of <u>the</u> <u>most</u> inteligent boys <u>of</u> the <u>science</u> class.",
                    "pilihan" => [
                        "the",
                        "most",
                        "of",
                        "science",
                    ],
                    "jawaban" => "of",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "35",
                    "soal" => "	Several people <u>have</u> <u>apparent</u> tried to change <u>the man's mind</u>, but he refuses <u>to listen</u>.",
                    "pilihan" => [
                        "have",
                        "apparent",
                        "the man's mind",
                        "to listen",
                    ],
                    "jawaban" => "apparent",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "36",
                    "soal" => "	<u>Many</u> of the population in the <u>rural areas</u> is <u>composed</u> of manual <u>laborers</u>.",
                    "pilihan" => [
                        "Many",
                        "rural areas",
                        "composed",
                        "laborers",
                    ],
                    "jawaban" => "Many",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "37",
                    "soal" => "	The leader Emphasized <u>that need</u> <u>for justice</u> and equality <u>between</u> his <u>people</u>.",
                    "pilihan" => [
                        "that need",
                        "for justice",
                        "between",
                        "people",
                    ],
                    "jawaban" => "between",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "38",
                    "soal" => "	The influence of the <u>nation's</u> literature, art, and <u>science</u> <u>have</u> captured <u>widespread</u> attention.",
                    "pilihan" => [
                        "nation's",
                        "science",
                        "have",
                        "widespread",
                    ],
                    "jawaban" => "have",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "39",
                    "soal" => "	The town we visited <u>was</u> a <u>four-days</u> jurney from our hotel, so we <u>took</u> the train instead <u>of the</u> bus.",
                    "pilihan" => [
                        "was",
                        "four-days",
                        "took",
                        "of the",
                    ],
                    "jawaban" => "four-days",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "40",
                    "soal" => "	He has <u>less</u> friends in <u>his</u> classes now <u>than</u> he had <u>last year</u>.",
                    "pilihan" => [
                        "less",
                        "his",
                        "than",
                        "last year",
                    ],
                    "jawaban" => "less",
                ]
            ],
        ];

        return $data;
    }

    public function get_soal_readingv6(){
        $data = [
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><center><b>SECTION 3</b></center></p>
                    <p><center><b>READING COMPREHENSION</b></center></p>
                    <p><center>Time : 55 Minutes</center></p>
                    <p><center>50 Questions</center></p>
                    <p>DIRECTIONS</p>
                    <p>In this section, you will read a number of passages. Each one is followed by approximately ten questions about it. For 1-50, chose the one best answer, (A), (B), (C), and (D), to each question. Then, find the number of the question on your answer sheet, and fill in the space that corresponds to the letter of the answer you have choosen. Answer all of the questions following a passage on the basis of what is stated in that passage.</p>
                "
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><i><b>Questions 1 through 10 are based on the following reading passage.</b></i></p>
                    <p>Elizhabeth Blackwell was born in England in 1821 and emigrated to New York City when she was ten years old. One day she decided that she wanted to become a doctor. That was nearly impossible for a woman in the midle of the ninteenth century. After writing many letters seeking admission to medical schools, she was finally accepted by a doctor in Philadelpia, so determined was she that she taught school and gave music lessons to earn money for her tuition.</p>
                    <p>In 1849, after graduation from medical school, she decided to further her education in Paris. She wanted to be a surgeon, but a serious eye infection forced her to <b>abandon</b> the idea.</p>
                    <p>Upon returning to the united states, she found it difficult to start her own practice becasue she was a woman. By 1857, Elizhabet and her sister also a doctor, along with another female doctor, managed to open a new horpital, the first for women and children. Besides being the first female physician in the United States and founding her own hospital, she also established the first medical school for woman.</p>
                "
            ],
            
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "1",
                    "soal" => "	Why couldn’t elizhabeth Blackwell realize her dream of becoming a surgeon? ........................",
                    "pilihan" => [
                        "It was difficult for her to start a practice in the United States.",
                        "A serious eye infection halted her quest.",
                        "She decided to further her education in Paris.",
                        "She couldn't get admitted to medical school.",
                    ],
                    "jawaban" => "A serious eye infection halted her quest.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "2",
                    "soal" => "	What main obstacle almost destroyed Elizabeth's chances for becoming a doctor? ........................",
                    "pilihan" => [
                        "She couldn't establish her hospital.",
                        "She couldn't graduate from medical school.",
                        "She wrote too many letters.",
                        "She was a woman.",
                    ],
                    "jawaban" => "She was a woman.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "3",
                    "soal" => "	How many years elapsed between her graduation from medical school and the opening of her hospital? ",
                    "pilihan" => [
                        "8.",
                        "10.",
                        "19.",
                        "36.",
                    ],
                    "jawaban" => "8.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "4",
                    "soal" => "	All of the following are <q>firsts</q> in the life of Elizabeth Blackwell EXCEPT ........................",
                    "pilihan" => [
                        "She establised the first medical school for women.",
                        "She and several other woman founded the first hospital for women and children.",
                        "She was the first woman surgeon in the United States.",
                        "She became the first female physician in the United States.",
                    ],
                    "jawaban" => "She was the first woman surgeon in the United States.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "5",
                    "soal" => "	When did Elizabeth Blackwell graduated from medical school? ........................",
                    "pilihan" => [
                        "1821.",
                        "1849.",
                        "1857.",
                        "1875.",
                    ],
                    "jawaban" => "1849.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "6",
                    "soal" => "	The word <q>abandon</q> in paragraph 2 is closest in meaning to ........................",
                    "pilihan" => [
                        "Look into.",
                        "Continue.",
                        "Give up.",
                        "Undertake.",
                    ],
                    "jawaban" => "Give up.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "7",
                    "soal" => "	What is the main idea of this passage? ........................",
                    "pilihan" => [
                        "Elizabeth Blackwell founded the first medical school for women.",
                        "Elizabeth Blackwell even taught music to pay for her medical studies.",
                        "Elizabeth Blackwell had to abandon her plans to become a doctor because of an eye infection.",
                        "Elizabeth Blackwell overcame serious obstacles to become the first woman doctor in the United States.",
                    ],
                    "jawaban" => "Elizabeth Blackwell overcame serious obstacles to become the first woman doctor in the United States.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "8",
                    "soal" => "	In what city was Elizhabeth Blackwell finnaly accepted in medical school?",
                    "pilihan" => [
                        "England",
                        "New york",
                        "Philadelpia",
                        "Paris",
                    ],
                    "jawaban" => "Philadelpia",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "9",
                    "soal" => "	The word <q>founding</q> in the last paragrah means most nearly the same as ........................",
                    "pilihan" => [
                        "Buying.",
                        "Establishing.",
                        "Looking for.",
                        "Locating.",
                    ],
                    "jawaban" => "Establishing.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "10",
                    "soal" => "	Why was it nearly impossible for Elizabeth Blackwell to get into medical school? ........................",
                    "pilihan" => [
                        " Her family didn't want her to be a doctor.",
                        "She wanted to be part of a profession that no woman had ever entered before.",
                        "She had little or no money to pay tuition.",
                        "She had a serious eye infection.",
                    ],
                    "jawaban" => "She wanted to be part of a profession that no woman had ever entered before.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><i><b>Question 11 through 21 are based on the following passage</b></i></p>
                    <p>Glands manufacture and secrete necessary substances. Exocrine glands secrete their products trough ducts, but endocrine glands, or ductless glands, release their products directly into the bloodstream.</p>
                    <p>One important endocrine glands is the thyroid gland. It is in the neck and has two lobes, one one each side of the windpipe. The thyroid gland collects iodine from the blood and produces thyroxine, an important hormone, which it stores in an inactive form. When thyroxine is needed by the body, the thyroid gland secretes it directly into the bloodstream. Thyroxine is combined int the body cells with other chemicals and effects many functions of the body.</p>
                    <p>The thyroid gland may be underactive or overactive, resulting in problem. An underactive thyroid causes hypothyroidism, while an overactive one causes Hyperthyroidism. The former problem, called myxedema in adults and cretinism in children, causes the growth process to slow down. A cretin's body and mind do not grow to their full potential. Hyperthyroidism, on the other hand, results in extreme nervousness, an increase in heart action, and other problems.</p>
                    <p>Either  hypothyroidism or hyperthyroidism may result in goither, or an enlarged thyroid gland. A goiter will appear when the body is not getting enough iodine. Goiter is less common today, since most people use iodized salt.</p>
                    <p>Kieven Russia also enjoyed a century of rebirth some two hundred years later under the able rule of yaroslav the Wise. Like Charlemagne, he founded schools, established libraries, and brought about many architectural achievements.</p>
                "
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "11",
                    "soal" => "	The thyroid gland is called an endocrine gland because it ........................",
                    "pilihan" => [
                        "is located in the neck",
                        "secretes directly into the bloodstream",
                        "has lobes",
                        "has ducts",
                    ],
                    "jawaban" => "secretes directly into the bloodstream",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "12",
                    "soal" => "	The word <q>it</q> in the first line paragraph 2 refers to ........................ ",
                    "pilihan" => [
                        "thyroid gland",
                        "iodine",
                        "blood",
                        "thyroxine",
                    ],
                    "jawaban" => "thyroid gland",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "13",
                    "soal" => "	A cretin is ........................",
                    "pilihan" => [
                        "an extremely irritable child",
                        "a young person with hypothyroidism",
                        "an adult with an underperforming thyroid gland",
                        "a child with  hyperthyroidism",
                    ],
                    "jawaban" => "a young person with hypothyroidism",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "14",
                    "soal" => "	Which of the following is a probable result of myxederma? ........................",
                    "pilihan" => [
                        "perspiration",
                        "overproduction of thyroxine",
                        "hyperactivity",
                        "sluggishness",
                    ],
                    "jawaban" => "sluggishness",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "15",
                    "soal" => "	The word <q>former</q> in line 9 refers to ........................",
                    "pilihan" => [
                        "perspiration",
                        "overproduction of thyroxine",
                        "overactive thyroid",
                        "hypothyroidism",
                    ],
                    "jawaban" => "hypothyroidism",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "16",
                    "soal" => "	 A goiter is ........................",
                    "pilihan" => [
                        "a chemical",
                        "an underactive thyroid gland",
                        "a swollen thyroid gland",
                        "a person with myxedrma",
                    ],
                    "jawaban" => "a swollen thyroid gland",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "17",
                    "soal" => "	Exocrine and endocrine glands are distinguished from each other by whether they........................",
                    "pilihan" => [
                        "result in an enlarged or shrunken goiter.",
                        "cause myxedema or cretinism.",
                        "cause hyperthyroidism or hypothyroidism.",
                        "secrete through ducts or without ducts.",
                    ],
                    "jawaban" => "secrete through ducts or without ducts.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "18",
                    "soal" => "	In line 1, the word <q>secrete</q> is closest in meaning to ........................",
                    "pilihan" => [
                        "absorb.",
                        "display.",
                        "emit.",
                        "indiscernible.",
                    ],
                    "jawaban" => "emit.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "19",
                    "soal" => "	If a thyroid is not working enough, the illness is known as ........................",
                    "pilihan" => [
                        "Hypothyroidism.",
                        "Excretion.",
                        "Hyperactivity.",
                        "Hyperthyroidism.",
                    ],
                    "jawaban" => "Hyperthyroidism.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "20",
                    "soal" => "	The main idea of the passage is ........................",
                    "pilihan" => [
                        "how glands work.",
                        "the function and illnesses of the thyroid gland.",
                        "secretion with and without glands.",
                        "the illnesses of an overactive thyroid gland.",
                    ],
                    "jawaban" => "the function and illnesses of the thyroid gland.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "21",
                    "soal" => "	The function of the thyroid gland is described in paragraph  ........................",
                    "pilihan" => [
                        "1",
                        "2",
                        "3",
                        "4",
                    ],
                    "jawaban" => "2",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b><i>Question 22 through 30 are based on the following passage</i></b></p>
                    <p>A recent investigation by scientists at the U.S. Geological Survey shows that strange animal behavior might help predict earthquakes. Investigators found such occurrences within a ten-kilometer radius of the epicenter of a fairly recent quake. Some birds screeched and flew about wildly; dogs yelped and ran around uncontrollably.</p>
                    <p>Scientists believe that animals can perceive environmental changes several hours or even days before the mishap. Animals were noted as being restles for several weeks before a Tashkent, Uzbekistan, earthquake. An hour before the disaster, domestic animals refused to go indoors , and dogs howled and barked furiously. In 1960, an earthquake struck Agadir in Morocco. Survivors recall that stray animals, including dogs, were seen streaming out of town before the earthquake. In a safari zoo near San Francisco, Ilamas would not eat the evening before a 1979 quake, and they ran around wildly all night.</p>
                    <p>Unusual animal behavior preceding earthquakes has been noted for centuries. British Admiral Robert Fitzroy  reported huge flocks of screaming seabirds over Concepcion, Chile, in 1835. An hour and a half later, dogs were seen fleeing , and ten minutes later the town was destroyed. Similar stories of chickens running around in apparent states of panic, horses trembling, and dogs barking incessantly were recorded throughout the eighteenth and nine-teenth centuries by survivors of earthquake destruction in India, Yugoslavia, Peru, Mexico, and the United States.</p>
                    <p>In 1976, after monitoring bizzare animal behavior, the Chinese predicted a devastating earthquake. Although hundreds of thousands of people were killed, the government was able to evacuate millions of other people and thus keep the death toll at a lower level.</p>
                "
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "22",
                    "soal" => "	What prediction may be made by observing animal behavior?  ........................",
                    "pilihan" => [
                        "The fact that an earthquake has occurred.",
                        "The ten-kilometer radius from the epicenter.",
                        "The number of people who will die.",
                        "An impending earthquake.",
                    ],
                    "jawaban" => "An impending earthquake.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "23",
                    "soal" => "	The author implies that animals are aware of an impending earthquake because  ........................",
                    "pilihan" => [
                        "They react to other animal behavior.",
                        "they are generally closer to the epicenter than the human observers. ",
                        "they have certain instinctive abilities to perceive that humans do not possess.",
                        "of their superior intelligence.",
                    ],
                    "jawaban" => "they have certain instinctive abilities to perceive that humans do not possess.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "24",
                    "soal" => "	The word <q>Evacuate</q> in the last paragraph is closest in meaning to  ........................",
                    "pilihan" => [
                        "Remove",
                        "Exile",
                        "Destroy",
                        "Emaciate",
                    ],
                    "jawaban" => "Remove",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "25",
                    "soal" => "	All of the following statements are true EXCEPT  ........................",
                    "pilihan" => [
                        "Some animals may be able to sense an approaching earthquake.",
                        "By observing animal behavior scientists perhaps can predict earthquakes.",
                        "By observing animal behavior scientists perhaps can predict earthquakes.",
                        "Some animals may be able to sense an approaching earthquake.",
                    ],
                    "jawaban" => "Some animals may be able to sense an approaching earthquake.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "26",
                    "soal" => "	In paragraph 1, the word <q>epicenter</q> is nearest in meaning to  ........................",
                    "pilihan" => [
                        "Stratosphere.",
                        "Contour.",
                        "Periphery.",
                        "Core.",
                    ],
                    "jawaban" => "Core.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "27",
                    "soal" => "	The passage implies that if scientists can accurately predict earthquakes, there will be",
                    "pilihan" => [
                        "fewer environmental canges.",
                        "fewer people evacuated.",
                        "a lower death rate.",
                        "fewer animals going crazy.",
                    ],
                    "jawaban" => "a lower death rate.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "28",
                    "soal" => "	In last paragraph, <q>devastating</q> means most nearly te same as  ........................",
                    "pilihan" => [
                        "forthcoming.",
                        "intense.",
                        "voracious.",
                        "destructive.",
                    ],
                    "jawaban" => "destructive.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "29",
                    "soal" => "	The main idea of this passage is that  ........................",
                    "pilihan" => [
                        "earthquakes can be prevented by observing animal behavior.",
                        "scientists can interpret animal behavior.",
                        "observing animal behavior can help people prepare for earthquakes.",
                        "people need to prepare animals for earthquakes.",
                    ],
                    "jawaban" => "observing animal behavior can help people prepare for earthquakes.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "30",
                    "soal" => "	Where in the reading  is it explained that the phenomena of animals' reacting to earthquakes has been 	reported for hundreds of years?   ........................",
                    "pilihan" => [
                        "paragraph 1",
                        "paragraph 2",
                        "paragraph 3",
                        "paragraph 4",
                    ],
                    "jawaban" => "paragraph 3",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><i><b>Questions 31 through 39 are based on the following passage.</b></i></p>
                    <p>As far back as 700 B.C., people have talked about children being cared for by wolves. Romulus and Remus, the legendary twin founders of Rome, were purported to have been cared for by wolves. According to legend, Mars fathered the two boys. As a result, a relative of their mother imprisoned her and ordered that the boys be drowned in the Tiber River. However, a she-wolf saved them from this horrible fate and took them back to her lair to care for them. Legend has it that when a she-wolf loses her litter, she seeks a human child to take its place.</p>
                    <p>This seemingly preposterous idea did not become credible until the late nineteenth century when a French doctor actually found a naked ten-year-old boy wandering in the woods. He did not walk erect, could not speak intelligibly, nor could he relate to people. He only growled and stared at them. Finally, the doctor won the boy's confidence and began to work with him. After many long years of devoted and patient instruction, the doctor was able to get the boy to clothe and feed himself, recognize and utter a number of words, and write letters and form words.</p> 
                "
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "31",
                    "soal" => "	The French doctor found the boy  ........................",
                    "pilihan" => [
                        "speaking intelligibly.",
                        "growling at him.",
                        "at his doorstep.",
                        "wandering in the woods.",
                    ],
                    "jawaban" => "wandering in the woods.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "32",
                    "soal" => "	In the the end of the first paragraph, the word <q>litter<q> means most nearly the same as  ........................",
                    "pilihan" => [
                        "hair.",
                        "offspring.",
                        "master.",
                        "garbage.",
                    ],
                    "jawaban" => "offspring.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "33",
                    "soal" => "	The doctor was able to work with the boy because  ........................",
                    "pilihan" => [
                        "the boy was dedicated and patient.",
                        "the boy liked to dress up.",
                        "the boy trusted him.",
                        "the boy was highly intelligent.",
                    ],
                    "jawaban" => "the boy trusted him.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "34",
                    "soal" => "	The word <q>utter</q> in the last of second paragraph is nearest in meaning to  ........................",
                    "pilihan" => [
                        "absolute.",
                        "speak.",
                        "scream.",
                        "read.",
                    ],
                    "jawaban" => "speak.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "35",
                    "soal" => "	All of the following statements are true EXCEPT  ........................",
                    "pilihan" => [
                        "Examples of wolves' caring for human children can be found only in the nineteenth century.",
                        "The young boy never was able to speak perfectly.",
                        "The French doctor succeeded in domesticating the boy somewhat.",
                        "She-wolves have been said to substitute human children for their lost litters.",
                    ],
                    "jawaban" => "Examples of wolves' caring for human children can be found only in the nineteenth century.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "36",
                    "soal" => "	The word <q>preposterous</q> in the first line of second paragraph is closest in meaning to  ........................",
                    "pilihan" => [
                        "dedicated.",
                        "scientific.",
                        "wonderful.",
                        "absurd.",
                    ],
                    "jawaban" => "absurd.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "37",
                    "soal" => "	The main idea of the passage is that according to legend  ........................",
                    "pilihan" => [
                        "A French doctor saved Romulus and Remus from drowning.",
                        "Romulus and Remus were cared for by a she-wolf.",
                        "She-wolves replace their dead offspring with human children.",
                        "Children who are raised by wolves can be rehabilitated.",
                    ],
                    "jawaban" => "Romulus and Remus were cared for by a she-wolf.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "38",
                    "soal" => "	According to the legend, Romulus and Remus were  ........................",
                    "pilihan" => [
                        "drowned in the Tiber River in 700 B.C.",
                        "discovered by a French doctor.",
                        "the founders of Rome.",
                        "found abandoned in Rome.",
                    ],
                    "jawaban" => "the founders of Rome.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "39",
                    "soal" => "	Where in the passage is it stated that, according to legend, Romulus and Remus founded Rome? ..........",
                    "pilihan" => [
                        "lines 1 – 2.",
                        "lines 5 – 6.",
                        "lines 7 – 8.",
                        "lines 9 – 10.",
                    ],
                    "jawaban" => "lines 1 – 2.",
                ]
            ],
            [
                "tipe" => "petunjuk",
                "data" => "
                    <p><b><i>Questions 40 through 50 are based on the following passage.</i></b></p>
                    <p><i>Vibrio parahaemolyticus</i> is a bacterial organism that has been isolated from sea water, shellfish, finfish, plankton, and salt springs. It has been a major cause of food poisoning in Japan, compelling the Japanese to do several studies on it. They have confirmed the presence of V. Parahaemolyticus in the north and central Pacific, with the highest abundance in inshore waters, particularly in or near large harbors.</p>
                    <p>A man named Nishio studied the relationship between the chloride content of sea water and the seasonal distribution of <i>V. parahaemolyticus</i>  and concluded that while the isolation of the organism was independent of the sodium chloride content, the distribution of the bacteria in sea water was dependent on the water temperature. In fact, it has been isolated in high frequencies during summer, from June to September, but was not isolated with the same frequency in winter.</p>
                    <p>Within four or five days after eating contaminated foods, a person will begin to experience diarrhea, the most common symptom; this will very often be accompanied by stomach cramps, nausea, and vomiting. Headache and fever, with or without chills, may also be experienced.</p>     
                "
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "40",
                    "soal" => "	Which of the following locations would be most likely to have a high concentration of <i>Vibrio 	parahaemolyticus</i>?  ........................",
                    "pilihan" => [
                        "Sediment.",
                        "The middle of the ocean.",
                        "A sea.",
                        "A bay.",
                    ],
                    "jawaban" => "A bay.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "41",
                    "soal" => "	The word <q>inshore</q> in the last line of the first paragraph is closest in meaning to  ........................",
                    "pilihan" => [
                        "cold.",
                        "active.",
                        "deep",
                        "near the coast",
                    ],
                    "jawaban" => "near the coast",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "42",
                    "soal" => "	The word <q>it</q> in the second paragraph refers to ........................",
                    "pilihan" => [
                        "Water temperature.",
                        "Sodium chloride content.",
                        "Sea water.",
                        "<i>Vibrio parahaemolyticus.</i>",
                    ],
                    "jawaban" => "<i>Vibrio parahaemolyticus.</i>",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "43",
                    "soal" => "	The safest time or eating seafood in the north Pacific is probably ........................",
                    "pilihan" => [
                        "August.",
                        "November.",
                        "July.",
                        "September.",
                    ],
                    "jawaban" => "November.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "44",
                    "soal" => "	The most common symptom of <i>V. Parahaemolyticus</i> poisoning is ........................",
                    "pilihan" => [
                        "September.",
                        "July.",
                        "November.",
                        "August.",
                    ],
                    "jawaban" => "November.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "45",
                    "soal" => "	The word <q>this</q> in the last paragraph refers to ........................",
                    "pilihan" => [
                        "Diarrhea.",
                        "A person.",
                        "Symptoms.",
                        "Contaminated foods.",
                    ],
                    "jawaban" => "Diarrhea.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "46",
                    "soal" => "	The incubation period for this illness is ........................",
                    "pilihan" => [
                        "Several months.",
                        "4 to 5 days.",
                        "3 to 4 hours.",
                        "2 to 3 days.",
                    ],
                    "jawaban" => "4 to 5 days.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "47",
                    "soal" => "	In the first line of third paragraph, <q>contaminated</q> is closest in meaning to ........................",
                    "pilihan" => [
                        "Ocean.",
                        "Tainted.",
                        "Salty.",
                        "Cooked.",
                    ],
                    "jawaban" => "Tainted.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "48",
                    "soal" => "	Nishio's study showed that ........................",
                    "pilihan" => [
                        "the presence of V. Parahaemolyticus was dependent on neither the salt content nor the water temperature.",
                        "the presence of V. Parahaemolyticus was dependent only on the salt content.",
                        "the presence of V. Parahaemolyticus was independent of both the water temperature and the salt content.",
                        "the presence of <i>V. parahaemolyticus</i> was dependent on the water temperature.",
                    ],
                    "jawaban" => "the presence of <i>V. parahaemolyticus</i> was dependent on the water temperature.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "49",
                    "soal" => "	The word <q>cramps</q> in the last paragraph means most nearly the same as ........................",
                    "pilihan" => [
                        "noises.",
                        "toxicity.",
                        "severe pain.",
                        "high temperature.",
                    ],
                    "jawaban" => "severe pain.",
                ]
            ],
            [
                "tipe" => "soal",
                "data" => [
                    "no" => "50",
                    "soal" => "	The word <q>isolation</q> in the second paragraph is closest in meaning to ........................",
                    "pilihan" => [
                        "conjunction.",
                        "impurity.",
                        "discovery.",
                        "separation.",
                    ],
                    "jawaban" => "separation.",
                ]
            ],
        ];

        return $data;
    }

}

/* End of file Soal_model.php */
