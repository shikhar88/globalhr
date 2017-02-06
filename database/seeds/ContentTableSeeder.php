<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['type' => 'aboutus',
            'value' => '<p style="text-align: justify;"><strong>Welcome To Global Education &amp; Human Resources P.Ltd.<br /><br />Globa</strong>l <strong>Education is committed to providing the best guidance and helping students to explore their potential for better life. We believe in integrative education that goes beyond the</strong> mere reproductive education and explores speculative knowledge. We focus on the approaches to prepare for the critical thinking, analytical power and creativity of our students that are availed with a unique atmosphere and modern facilities.</p>
                    <p style="text-align: justify;">We are pleased to let you know that, eventually you have reached to the place, where you are offered perfect and comprehensive guidance for your overseas career opportunities. We are not inclined to boast about our achievements, we are out of the fact that we had an opportunity to extend our helping hand to more and more people who are happily settled across the world.</p>
                    <p style="text-align: justify;">Global Education is on the verge of being one and half decade old in the field of overseas education consulting and we can proudly say that we are one of the best in this Industry. It wasn&rsquo;t easy reaching where we are today.</p>
                    <p style="text-align: justify;">Various milestones have been surpassed in the past decade but it has failed to exhaust us. Our aim is to help students who wish to study extensively in their chosen fields in offshore lands. Here at overseas education has been handled in the most professional manner that one could imagine. The efforts we put in have always been rewarded in the form of blessings from the migrant and their family members.</p>
                    <p style="text-align: justify;">Here at Global Education, we treat all our clients as a part of the family and we see to it that they are the most benefitted rather than it being vice versa. So it can be said that our transparency and the blessings that we truly deserve have been instrumental milestones in our journey to success.</p>
                    <p style="text-align: justify;">Our Mission is to emphasize on equal opportunities and a flow of Knowledge, Expertise and Ideas regardless of the borders in the right direction to anywhere and everywhere worthy of reorganization and rewards.</p>
                    <p style="text-align: justify;">Our goal is to understand the basic requirements of the students and help them to choose the right course and the university / college accordingly. We would like to be a perfect link between the Universities / Colleges and the aspiring students who would like to study in a foreign land. Our knowledge, professional behavior, commitment, infrastructure and a highly experienced team at Global Education shall be helpful in achieving our goal of student satisfaction.</p>
                    <p style="text-align: justify;">Global Education is recognized by ICEF, NZ Government, Ministry of Education Nepal and ECAN by awarding membership for its quality and professional services,</p>
                    <p style="text-align: justify;">Global Education is an official representative for number of Universities and colleges in United States of America, Australia, New Zealand, United Kingdom, Germany, and Canada.</p>',
            ]
        ]);
    }
}
