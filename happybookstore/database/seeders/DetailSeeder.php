<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("details")->insert([[
            "book_id" => 1,
            "author" => "Michael Crichton",
            "publisher" => "Alfred A. Knopf",
            "year" => 1990,
            "description" => "Jurassic Park is a 1990 science fiction novel written by Michael Crichton. A cautionary tale about genetic engineering, it presents the collapse of an amusement park showcasing genetically re-created dinosaurs to illustrate the mathematical concept of chaos theory and its real-world implications."
        ], [
            "book_id" => 2,
            "author" => "Alexandre Dumas",
            "publisher" => "Simon & Schuster",
            "year" => 1844,
            "description" => "The Three Musketeers (French: Les Trois Mousquetaires, [le tʁwɑ muskətɛːʁ]) is a French historical adventure novel written in 1844 by French author Alexandre Dumas. It is in the swashbuckler genre, which has heroic, chivalrous swordsmen who fight for justice."
        ], [
            "book_id" => 3,
            "author" => "Lucy Foley",
            "publisher" => "HarperCollins",
            "year" => 2020,
            "description" => "On an island off the coast of Ireland, guests gather to celebrate two people joining their lives together as one. The groom: handsome and charming, a rising television star. The bride: smart and ambitious, a magazine publisher. It’s a wedding for a magazine, or for a celebrity: the designer dress, the remote location, the luxe party favors, the boutique whiskey. The cell phone service may be spotty and the waves may be rough, but every detail has been expertly planned and will be expertly executed."
        ], [
            "book_id" => 4,
            "author" => "Patricia Highsmith",
            "publisher" => "Harper & Brothers",
            "year" => 1951,
            "description" => "Strangers on a Train (1950) is a psychological thriller novel by Patricia Highsmith about two men whose lives become entangled after one of them proposes they \"trade\" murders."
        ], [
            "book_id" => 5,
            "author" => "David Sedaris",
            "publisher" => "Little, Brown and Company",
            "year" => 2000,
            "description" => "Me Talk Pretty One Day, published in 2000, is a bestselling collection of essays by American humorist David Sedaris. The book is separated into two parts. The first part consists of essays about Sedaris’s life before his move to Normandy, France, including his upbringing in suburban Raleigh, North Carolina, his time working odd jobs in New York City, and a visit to New York from a childhood friend and her bumpkinish girlfriend"
        ], [
            "book_id" => 6,
            "author" => "Penelope Mortimer",
            "publisher" => "Bloomsbury Publishing PLC",
            "year" => 1995,
            "description" => "The unnamed narrator of this story is married to her fourth and excessively well-paid husband. This income only serves to highlight the emptiness of a life led by a woman deprived of the domestic trappings that have defined her."
        ], [
            "book_id" => 7,
            "author" => "Hergé",
            "publisher" => "Casterman",
            "year" => 1943,
            "description" => "The Crab with the Golden Claws (French: Le Crabe aux pinces d'or) is the ninth volume of The Adventures of Tintin, the comics series by Belgian cartoonist Hergé. The story was serialised weekly in Le Soir Jeunesse, the children's supplement to Le Soir, Belgium's leading francophone newspaper, from October 1940 to October 1941 amidst the German occupation of Belgium during World War II."
        ], [
            "book_id" => 8,
            "author" => "Herman Melville",
            "publisher" => "Richard Bentley",
            "year" => 1851,
            "description" => "Moby-Dick; or, The Whale is an 1851 novel by American writer Herman Melville. The book is the sailor Ishmael's narrative of the obsessive quest of Ahab, captain of the whaling ship Pequod, for revenge on Moby Dick, the giant white sperm whale that on the ship's previous voyage bit off Ahab's leg at the knee. "
        ], [
            "book_id" => 9,
            "author" => "Arthur Miller",
            "publisher" => "Penguin Books",
            "year" => 2003,
            "description" => "The Crucible is a 1953 play by American playwright Arthur Miller. It is a dramatized and partially fictionalized story of the Salem witch trials that took place in the Massachusetts Bay Colony during 1692–93"
        ], [
            "book_id" => 10,
            "author" => "Khaled Hosseini",
            "publisher" => "Riverhead Books",
            "year" => 2003,
            "description" => "The Kite Runner is the first novel by Afghan-American author Khaled Hosseini. Published in 2003 by Riverhead Books, it tells the story of Amir, a young boy from the Wazir Akbar Khan district of Kabul. The story is set against a backdrop of tumultuous events, from the fall of Afghanistan's monarchy through the Soviet invasion, the exodus of refugees to Pakistan and the United States, and the rise of the Taliban regime."
        ], [
            "book_id" => 11,
            "author" => "Jane Austen",
            "publisher" => "T. Egerton, Whitehall",
            "year" => 1813,
            "description" => "Pride and Prejudice is an 1813 novel of manners written by Jane Austen. Though it is mostly called a romantic novel, it is also a satire. The novel follows the character development of Elizabeth Bennet, the dynamic protagonist of the book who learns about the repercussions of hasty judgments and comes to appreciate the difference between superficial goodness and actual goodness."
        ], [
            "book_id" => 12,
            "author" => "Diana Gabaldon",
            "publisher" => "Delacorte Press",
            "year" => 1991,
            "description" => "Outlander is a series of historical fantasy novels by American author Diana Gabaldon. Gabaldon began the first volume of the series, Outlander, in the late 1980s, and it was published in 1991. She has published nine out of a planned ten volumes. "
        ], [
            "book_id" => 13,
            "author" => "Bram Stoker",
            "publisher" => "Archibald Constable and Company",
            "year" => 1897,
            "description" => "Dracula is a novel by Bram Stoker, published in 1897. As an epistolary novel, the narrative is related through letters, diary entries, and newspaper articles. It has no single protagonist, but opens with solicitor Jonathan Harker taking a business trip to stay at the castle of a Transylvanian noble, Count Dracula. Harker escapes the castle after discovering that Dracula is a vampire, and the Count moves to England and plagues the seaside town of Whitby. "
        ], [
            "book_id" => 14,
            "author" => "Stephen King",
            "publisher" => "Doubleday",
            "year" => 1977,
            "description" => "The Shining is a 1977 horror novel by American author Stephen King. It is King's third published novel and first hardback bestseller; its success firmly established King as a preeminent author in the horror genre. The setting and characters are influenced by King's personal experiences, including both his visit to The Stanley Hotel in 1974 and his struggle with alcoholism."
        ], [
            "book_id" => 15,
            "author" => "J.K. Rowling",
            "publisher" => "Doubleday",
            "year" => 1977,
            "description" => "Harry Potter and the Philosopher's Stone is a fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowling's debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school, and with the help of his friends, he faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry's parents, but failed to kill Harry when he was just 15 months old."
        ], [
            "book_id" => 16,
            "author" => "J.K. Rowling",
            "publisher" => "Doubleday",
            "year" => 1998,
            "description" => "Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series. The plot follows Harry's second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school's corridors warn that the \"Chamber of Secrets\" has been opened and that the \"heir of Slytherin\" would kill all pupils who do not come from all-magical families. These threats are found after attacks that leave residents of the school petrified. Throughout the year, Harry and his friends Ron and Hermione investigate the attacks."
        ], [
            "book_id" => 17,
            "author" => "Frank Herbert",
            "publisher" => "Chilton Books",
            "year" => 1965,
            "description" => "Dune is a 1965 science fiction novel by American author Frank Herbert, originally published as two separate serials in Analog magazine. It tied with Roger Zelazny's This Immortal for the Hugo Award in 1966 and it won the inaugural Nebula Award for Best Novel. It is the first installment of the Dune saga. In 2003, it was described as the world's best-selling science fiction novel."
        ], [
            "book_id" => 18,
            "author" => "Andy Weir",
            "publisher" => "Crown",
            "year" => 2014,
            "description" => "The Martian is a 2011 science fiction debut novel written by Andy Weir. The book was originally self-published on Weir's blog, in a serialized format. In 2014, the book was re-released after Crown Publishing Group purchased the exclusive publishing rights. The story follows an American astronaut, Mark Watney, as he becomes stranded alone on Mars in 2035 and must improvise in order to survive. A film adaptation, The Martian, directed by Ridley Scott and starring Matt Damon, was released in October 2015."
        ], [
            "book_id" => 19,
            "author" => "Agatha Christie",
            "publisher" => "Collins Crime Club",
            "year" => 1934,
            "description" => "Murder on the Orient Express is a work of detective fiction by English writer Agatha Christie featuring the Belgian detective Hercule Poirot. It was first published in the United Kingdom by the Collins Crime Club on 1 January 1934. In the United States, it was published on 28 February 1934, under the title of Murder in the Calais Coach, by Dodd, Mead and Company. The UK edition retailed at seven shillings and sixpence and the US edition at $2."
        ], [
            "book_id" => 20,
            "author" => "Agatha Christie",
            "publisher" => "Collins Crime Club",
            "year" => 1937,
            "description" => "Death on the Nile is a work of detective fiction by British writer Agatha Christie, published in the UK by the Collins Crime Club on 1 November 1937 and in the US by Dodd, Mead and Company the following year. The UK edition retailed at seven shillings and sixpence and the US edition at $2.00."
        ],]);
    }
}
