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

}

/* End of file Soal_model.php */
