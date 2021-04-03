<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_model extends CI_Model {

    public function get_soal_listening(){
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
                "data" => "soal 1-5.mp3"
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
                "data" => "soal 6-10.mp3"
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
                "data" => "soal 11-15.mp3"
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
                "data" => "soal 16-20.mp3"
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
                "data" => "soal 21-25.mp3"
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
                "data" => "soal 26-30.mp3"
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
                "data" => "soal 31-34.mp3"
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
                "data" => "soal 35-38.mp3"
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
                "data" => "soal 39-42.mp3"
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
                "data" => "soal 43-46.mp3"
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
                "data" => "soal 47-50.mp3"
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

    public function get_soal_structure(){
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

    public function get_soal_reading(){
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

}

/* End of file Soal_model.php */
