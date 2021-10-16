class GuestBookUser
{
/**
* @param Comment $comment
* @throws Exception выбрасывает екзепшн, отсуцтвует соединение с БД
*/
public function addComment(Comment $comment): void
{
// сохранить коментарий в таблицу comments
}

/**
* @return Comment[]
*/
public function getComments() : array
{
// вернуть все коментарии из таблицы comments
}
}

class Comment
{
/**
* @param string $author
* @param string $text
*
function __construct ($author, $text)
{
 // инициализация свойств объекта
}

/**
*@var string $author
*/
private $author;

/**
*@var string $text
*/
private $text;

/**
* @return string @author
*
*/
public function getAuthor ()
{
  // вернёт автора
}

/**
* @return string @text
*
*/
public function getText()
{
// вернёт текст коментария
}

}
