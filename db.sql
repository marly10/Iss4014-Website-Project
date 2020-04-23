
 CREATE TABLE TRIVIA_TABLE  (

  T_ID           INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
  T_QUESTION      VARCHAR(255) NOT NULL,
  T_ANSWER1      VARCHAR(30) NOT NULL,
  T_ANSWER2      VARCHAR(30) NOT NULL,
  T_ANSWER3      VARCHAR(30) NOT NULL,
  T_ANSWER4      VARCHAR(30) NOT NULL,
  T_ANSWER        VARCHAR(30) NOT NULL,
  T_COUNT          INTEGER ,
  T_IMG  LONGBLOB NOT NULL
  );
  
 /*Adding trivia questions to trivia table, some questions will need images, not sure the syntax for inserting LONGBLOBs yet*/
INSERT INTO TRIVIA_TABLE(T_ID, T_QUESTION, T_ANSWER1, T_ANSWER2, T_ANSWER3, T_ANSWER4, T_ANSWER) VALUES(1, "What is the name of this character?", "Loki", "Captain Marvel", "Thor", "Hawkeye", "Thor");
INSERT INTO TRIVIA_TABLE(T_ID, T_QUESTION, T_ANSWER1, T_ANSWER2, T_ANSWER3, T_ANSWER4, T_ANSWER) VALUES(2, "Which film was the first of the Marvel Cinematic Universe?", "Avengers: Age of Ultron", "Iron Man", "Black Panther", "The Guardians of the Galaxy", "Iron Man");
INSERT INTO TRIVIA_TABLE(T_ID, T_QUESTION, T_ANSWER1, T_ANSWER2, T_ANSWER3, T_ANSWER4, T_ANSWER) VALUES(3, "What is the name of Tony Stark's significant other?", "Pepper Potts", "Sunset Baine", "Carol Danvers", "Black Widow", "Pepper Potts");
INSERT INTO TRIVIA_TABLE(T_ID, T_QUESTION, T_ANSWER1, T_ANSWER2, T_ANSWER3, T_ANSWER4, T_ANSWER) VALUES(4, "What is Thanos trying to obtain in the Avengers: Endgame movie?", "Titanium", "Black Panther's soul", "The Infinity Stones", "Thor's Hammer", "The Infinity Stones");
INSERT INTO TRIVIA_TABLE(T_ID, T_QUESTION, T_ANSWER1, T_ANSWER2, T_ANSWER3, T_ANSWER4, T_ANSWER) VALUES(5, "Where is Black Panther the king of?", "New York", "Wakanda", "Asgard", "Muir Island", "Wakanda");
