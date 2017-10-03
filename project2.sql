
--This is the Music Table & Filler

Create Table Music(
	MusicId INT NOT NULL PRIMARY KEY,
	Title	VARCHAR(100),
	Artist  VARCHAR(25),
	Genre VARCHAR(15),
	ReleaseDate DATE,
	SongLength TIME,
	AlbumName VARCHAR(25),
	Price DOUBLE(10,2)
)Engine=InnoDB;

INSERT INTO Music VALUES (1,  "Cruise",  'Florida Georgia Line  ',  'Country  ',  '2012-08-06  ',  '00:03:29', "It'z Just What We Do",0.99);
INSERT INTO Music VALUES (2,  'Mask Off  ',  'Future  ',  'Hip-Hop  ',  '2017-04-18  ',  '00:03:29  ',  'Future  ',0.99);
INSERT INTO Music VALUES (3,  'Attention  ',  'Charlie Puth  ',  'Pop  ',  '2017-04-21  ',  '00:03:31  ',  'Voice Notes  ',0.99);
INSERT INTO Music VALUES (4,  'Bodak Yellow  ',  'Cardi B  ',  'Hip-Hop  ',  '2017-06-16  ',  '00:03:36  ',  'Single  ',0.99);
INSERT INTO Music VALUES (5,  'Too Good at Goodbyes  ',  'Sam Smith  ',  'Pop  ',  '2017-08-08  ',  '00:03:21  ',  'Single  ',1.99);
INSERT INTO Music VALUES (6,  'Take Your Time  ',  'Sam Hunt  ',  'Country  ',  '2014-11-24  ',  '00:03:38  ',  'Single  ',1.05);
INSERT INTO Music VALUES (7,  'Sweet Home Alabama  ',  'Lynyrd Skynyrd  ',  'Classic Rock  ',  '1974-06-24  ',  '00:04:45  ',  'Second Helping  ',1.00);
INSERT INTO Music VALUES (8,  '1-800-273-8255  ',  'Logic  ',  'Hip-Hop  ',  '2017-04-28  ',  '00:04:10  ',  'Everybody  ',0.99);
INSERT INTO Music VALUES (9,  'Just to See You Smile  ',  'Tim McGraw  ',  'Country  ',  '1997-08-09  ',  '00:03:33  ',  'Everywhere  ',1.99);
INSERT INTO Music VALUES (10,  'Rockstar  ',  'Post Malone  ',  'Hip-Hop  ',  '2017-08-26  ',  '00:03:17  ',  'Single  ',1.99);
INSERT INTO Music VALUES (11,  'Walk this Way  ',  'Aerosmith  ',  'Classic Rock  ',  '1975-08-28  ',  '00:03:40  ',  'Toys in the Attic  ',1.99);
INSERT INTO Music VALUES (12,  'Look What You Made Me Do  ',  'Taylor Swift  ',  'Pop  ',  '2017-08-25  ',  '00:03:31  ',  'Reputation  ',0.99);
INSERT INTO Music VALUES (13,  'Stairway to Heaven  ',  'Led Zeppelin  ',  'Classic Rock  ',  '1971-11-08  ',  '00:08:02  ',  'Led Zeppelin IV  ',0.99);

--This is the Movie Table & Filler

Create table Movies (
	MovieId int NOT NULL,
	Title varchar(255),
	Director varchar(255),
	Genre varchar(255)
	Year int(4),
	Rating float(2,1),
	Price float(6,2),
	PRIMARY KEY (MovieId)
);

INSERT INTO Movies VALUES (1,   'Logan  ',   'James Mangold  ',   'Action  ', 2017, 8.1, 23.43);
INSERT INTO Movies VALUES (2,   'The Dark Knight  ',   'Christopher Nolan  ',   'Action  ', 2008, 9.0, 43.56);
INSERT INTO Movies VALUES (3,   'Pulp Fiction  ',   'Quentin Tarantino  ',   'Crime  ',1994, 8.9, 65.35);
INSERT INTO Movies VALUES (4,   'Fight Club  ',   'David Fincher  ',   'Drama  ', 1999, 8.8, 65.78);
INSERT INTO Movies VALUES (5,   'Forrest Gump  ',   'Robert Zemeckis  ',   'Comedy  ', 1994, 8.8, 46.22);
INSERT INTO Movies VALUES (6,   'Inception  ',   'Christopher Nolan  ',   'Action  ', 2010, 8.8, 47.65);
INSERT INTO Movies VALUES (7,   'The Matrix  ',   'Wachowski Brothers  ',   'Sci-Fi  ', 1999, 8.7, 33.33);
INSERT INTO Movies VALUES (8,   'Saving Private Ryan  ',   'Steven Spielberg  ',   'Drama  ', 1998, 8.6, 44.89);
INSERT INTO Movies VALUES (9,   'Spirited Away  ',   'Hayao Miyazaki  ',   'Animation  ', 2001, 8.6, 63.36);
INSERT INTO Movies VALUES (10,   'Interstellar  ',   'Christopher Nolan  ',   'Adventure  ', 2014, 8.6, 849.36);
INSERT INTO Movies VALUES (11,   'Whiplash  ',   'Damien Chazelle  ',   'Drama  ', 2014, 8.5, 778.65);
INSERT INTO Movies VALUES (12,   'WALL-E  ',   'Andrew Stanton  ',   'Animation  ', 2008, 8.4, 95.12);
INSERT INTO Movies VALUES (13,   'Die Hard  ',   'John McTiernan  ',   'Action  ', 1988, 8.2, 111.11);

--This is the Book table & filler

create table Books (
	ISBN int(10) NOT NULL,
    Title VARCHAR(255) NOT NULL,
    Author VARCHAR(255) NOT NULL,
    Pages int NOT NULL,
    Genre VARCHAR(32),
    PubYear YEAR,
    PRIMARY KEY (ISBN)
);


INSERT INTO Books VALUES (0486406512,   "A Tale of Two Cities",   "Charles Dickens", 341,   "Historical Novel", 1859);
INSERT INTO Books VALUES (0747532699,   "Harry Potter and the Sorcerer's Stone",   'J.K. Rowling  ', 309,   'Fantasy  ', 1997);
INSERT INTO Books VALUES (0618968636,   'The Hobbit  ',   'J.R.R. Tolkien  ', 304,   'High Fantasy  ', 1937);
INSERT INTO Books VALUES (0064404994,   'The Lion, the Witch, and the Wardrobe  ',   'C.S. Lewis  ', 208,   "Children's Fantasy", 1950);
INSERT INTO Books VALUES (1400079179,   'The Da Vinci Code  ',   'Dan Brown  ', 454,   'Mystery  ', 2003);
INSERT INTO Books VALUES (0439785960,   'Harry Potter and the Half-Blood Prince  ',   'J.K. Rowling  ', 542,   'Fantasy  ', 2005);
INSERT INTO Books VALUES (0316769487,   'The Catcher in the Rye  ',   'J.D. Salinger  ', 214,   'Realistic Fiction  ', 1951);
INSERT INTO Books VALUES (0439064872,   'Harry Potter and the Chamber of Secrets  ',   'J.K. Rowling  ', 341,   'Fantasy  ', 1998);
INSERT INTO Books VALUES (0439136369,   'Harry Potter and the Prisoner of Azkaban  ',   'J.K. Rowling  ', 435,   'Fantasy  ', 1999);
INSERT INTO Books VALUES (0553103547,   'A Game of Thrones  ',   'George R.R. Martin  ', 694,   'Epic Fantasy  ', 1996);
INSERT INTO Books VALUES (0553801503,   'A Feast for Crows  ',   'George R.R. Martin  ', 976,   'Epic Fantasy  ', 2005);
INSERT INTO Books VALUES (0439139600,   'Harry Potter and the Goblet of Fire  ',   'J.K. Rowling  ', 734,   'Fantasy  ', 2000);

--This is the friends table & filer

CREATE TABLE Friends (
	FriendId int NOT NULL,
	First varchar(255),
	Last varchar(255)
);

INSERT INTO Friends VALUES (1,   'Jeanelle  ',   'Acebedo  ');
INSERT INTO Friends VALUES (2,   'Yuonne  ',   'Tharp  ');
INSERT INTO Friends VALUES (3,   'Bobbie  ',   'Gusler  ');
INSERT INTO Friends VALUES (4,   'Alberto  ',   'Pickett  ');
INSERT INTO Friends VALUES (5,   'Leisha  ',   'Polich  ');
INSERT INTO Friends VALUES (6,   'Dotty  ',   'Tippit  ');
INSERT INTO Friends VALUES (7,   'Mitchel  ',   'Gordan  ');
INSERT INTO Friends VALUES (8,   'Lynsey  ',   'Napoli  ');
INSERT INTO Friends VALUES (9,   'Brett  ',   'Pilkenton  ');
INSERT INTO Friends VALUES (10,   'Clifford  ',   'Tweedy  ');
INSERT INTO Friends VALUES (11,   'Tiny  ',   'Breitenstein  ');
INSERT INTO Friends VALUES (12,   'Kathi  ',    'Breland  ');
INSERT INTO Friends VALUES (13,   'Gregory  ',   'Ashe  ');

--This is the Borrowed Section

CREATE TABLE BorrowedBooks (
	ISBN int NOT NULL,
	FriendId int NOT NULL,
	DateBorrowed DATE
);

INSERT INTO BorrowedBooks VALUES (0618968636, 3, '2017-08-15');
INSERT INTO BorrowedBooks VALUES (1400079179, 4, '2017-08-15');
INSERT INTO BorrowedBooks VALUES (0316769487, 8, '2017-08-15');
INSERT INTO BorrowedBooks VALUES (0439064872, 9, '2017-08-15');
INSERT INTO BorrowedBooks VALUES (0553103547, 3, '2017-08-15');
INSERT INTO BorrowedBooks VALUES (0439139600, 11, '2017-08-15');

CREATE TABLE BorrowedMovies (
	MovieId int NOT NULL,
	FriendId int NOT NULL,
	DateBorrowed DATE
);

INSERT INTO BorrowedMovies VALUES (11, 5, '2017-09-27');
INSERT INTO BorrowedMovies VALUES (7, 7, '2017-09-12');
INSERT INTO BorrowedMovies VALUES (9, 2, '2017-09-14');
INSERT INTO BorrowedMovies VALUES (2, 1, '2017-09-28');
INSERT INTO BorrowedMovies VALUES (6, 4, '2017-09-11');
INSERT INTO BorrowedMovies VALUES (8, 5, '2017-09-14');
INSERT INTO BorrowedMovies VALUES (13, 5, '2017-09-22');

CREATE TABLE BorrowedMusic (
	MusicId int NOT NULL,
	FriendId int NOT NULL,
	DateBorrowed DATE
);

INSERT INTO BorrowedMusic VALUES (3, 3, '2017-09-21');
INSERT INTO BorrowedMusic VALUES (5, 5, '2017-09-27');
INSERT INTO BorrowedMusic VALUES (12, 4, '2017-09-02');
INSERT INTO BorrowedMusic VALUES (8, 2, '2017-09-01');
INSERT INTO BorrowedMusic VALUES (6, 1, '2017-09-12');
INSERT INTO BorrowedMusic VALUES (10, 11, '2017-09-13');
INSERT INTO BorrowedMusic VALUES (1, 6, '2017-09-15');


/*
Functioning Queries for the library

This query checks to see how many songs of each genre we own.

SELECT count(Genre) GenreCount, Genre FROM
Music
Group By Genre;

This query checks to see what is the longest song for each genre that we own.

SELECT max(SongLength) MaxSongLength, Title,Genre FROM
Music
GROUP BY GENRE;

This query provides the owned songs that were released before 2000 and what album they were on. It also provides the artists name.

SELECT Artist, Title,AlbumName FROM
Music WHERE
AlbumName != ’Single’ and 
ReleaseDate < ‘2000-01-01’;

This query shows the titles of books whose length is between 300 and 500 pages, and then sorts them by page length

SELECT Title, Pages
FROM Books 
WHERE Pages >= 300 
AND Pages <= 500 
ORDER BY Pages;

This query lists the title and author of any type of fantasy book

SELECT Title, Author 
FROM Book 
WHERE Genre LIKE '%Fantasy%';

This query lists all friends who are borrowing a book, the name of the book, and the date they borrowed it

SELECT First, Last, Title, DateBorrowed 
FROM Book, BorrowedBooks, Friends 
WHERE Friends.FriendId = BorrowedBooks.FriendId 
AND BorrowedBooks.ISBN = Book.ISBN;

This query shows the total amount of money spent on Music and Movies

SELECT (SELECT SUM(Price) FROM Music) 
+ (SELECT SUM(Price) FROM Movies) 
AS TotalMoneySpent;

This query lists the friends that have borrowed a movie and shows the date FROM closest to farthest

SELECT First, Last, Title, DateBorrowed 
FROM Friends, Movies, BorrowedMovies 
WHERE Friends.FriendId = BorrowedMovies.FriendId 
AND Movies.MovieId = BorrowedMovies.MovieId 
ORDER BY DateBorrowed DESC;

This query gives the Average price for Music and Movies together in one table

SELECT AVG(Music.Price) AS AverageMusicPrice, 
AVG(Movies.Price) AS AverageMoviePrice 
FROM Music, Movies;


This query displays the name of anyone who has borrowed a book, movie, and music, and displays the titles of the things they’ve borrowed

SELECT First, Last, 
Books.Title AS 'Books Title', 
Movies.Title AS 'Movie Title', 
Music.Title AS 'Song Title' 
FROM Friends, Books, Music, Movies, BorrowedBooks, BorrowedMusic, BorrowedMovies 
WHERE Friends.FriendId = BorrowedBooks.FriendId 
AND Friends.FriendId = BorrowedMovies.FriendId 
AND Friends.FriendId = BorrowedMusic.FriendId 
AND BorrowedBooks.ISBN = Books.ISBN 
AND BorrowedMusic.MusicId = Music.MusicId 
AND BorrowedMovies.MovieId = Movies.MovieId;


*/
