<?php
        require_once '../db-config.php';
        require_once '../model/Note.php';
        class NoteController{
                function get_notes($user_id)
                {
                    $res = [];
                    $mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DB_NAME);

                    if($mysqli->connect_errno){
                            $res['status'] = 'error';
                            $res['message'] = 'Unable to connect, please refresh the page or try later..';
                            return $res;
                    }

                    $stmt = $mysqli->prepare("select id, title, created, is_pinned from notes where user_id=?");

                    if($stmt->bind_param('i', $user_id) && $stmt->execute()){
                            $stmt->bind_result($id, $title, $created, $is_pinned);
                            $res['status'] = 'success';
                            $res['data'] = [];
                            while($stmt->fetch()){
                              $res['data'][] = ['id' => $id, 'title' => $title, 'created' => $created, 'is_pinned' => $is_pinned];
                            }

                    }else{
                            $res['status'] = 'error';
                            $res['message'] = "Can't insert right now try later";
                    }

                    $stmt->close();
                    $mysqli->close();

                    return $res;
                }
                function get_note($note){
                    $res = [];
                    $mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DB_NAME);

                    if($mysqli->connect_errno){
                            $res['status'] = 'error';
                            $res['message'] = 'Unable to connect, please refresh the page or try later..';
                            return $res;
                    }

                    $user_id = $note->get_user_id();
                    $note_id = $note->get_id();

                    $stmt = $mysqli->prepare("select title, content, created, last_updated, is_pinned from notes where id=? && user_id=?");

                    if($stmt->bind_param('si', $note_id, $user_id) && $stmt->execute()){
                            $stmt->bind_result($title, $content, $created, $last_updated, $is_pinned);
                            if($stmt->fetch()){
                              $res['status'] = 'success';
                              $res['data'] = ['title' => $title, 'content' => $content, 'created' => $created, 'last_updated' => $last_updated, 'is_pinned' => $is_pinned];
                            }else{
                              $res['status'] = 'error';
                              $res['message'] = 'Wrong id is given!';
                            }

                    }else{
                            $res['status'] = 'error';
                            $res['message'] = "Can't insert right now try later";
                    }

                    $stmt->close();
                    $mysqli->close();

                    return $res;
                }

                function insert($note){
                    $res = [];
                    $mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DB_NAME);

                    if($mysqli->connect_errno){
                            $res['status'] = 'error';
                            $res['message'] = 'Unable to connect, please refresh the page or try later..';
                            return $res;
                    }

                    $user_id = $note->get_user_id();
                    $title = $mysqli->real_escape_string($note->get_title());
                    $content = $mysqli->real_escape_string($note->get_content());

                    $stmt = $mysqli->prepare("insert into notes(user_id, title, content, created, last_updated, is_pinned) values (?, ?, ?, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 0)");

                    if($stmt->bind_param('iss', $user_id, $title, $content) && $stmt->execute()){
                            $res['status'] = 'success';
                            $res['data']['message'] = 'Successfully added your note';
                    }else{
                            $res['status'] = 'fail';
                            $res['data']['message'] = "Can't insert right now try later";
                    }

                    $stmt->close();
                    $mysqli->close();

                    return $res;
                }

              function update($note){
                    $res = [];
                    $mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DB_NAME);

                    if($mysqli->connect_errno){
                            $res['status'] = 'error';
                            $res['message'] = 'Unable to connect, please refresh the page or try later..';
                            return $res;
                    }

                    $id = $note->get_id();
                    $user_id = $note->get_user_id();
                    $title = $mysqli->real_escape_string($note->get_title());
                    $content = $mysqli->real_escape_string($note->get_content());

                    $stmt = $mysqli->prepare("update notes set title=?, content=?, last_updated=CURRENT_TIMESTAMP where id=? && user_id=?");

                    if($stmt->bind_param('sssi', $title, $content, $id, $user_id) && $stmt->execute()){
                            $res['status'] = 'success';
                            $res['data']['message'] = 'Successfully saved your note!';
                    }else{
                            $res['status'] = 'fail';
                            $res['data']['message'] = "can't save right now try later";
                    }

                    $stmt->close();
                    $mysqli->close();

                    return $res;
                }

                function deleteNote($id, $user_id){
                      $res = [];
                      $mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DB_NAME);

                      if($mysqli->connect_errno){
                              $res['status'] = 'error';
                              $res['message'] = 'Unable to connect, please refresh the page or try later..';
                              return $res;
                      }


                      $stmt = $mysqli->prepare("delete from notes where id=? && user_id=?");

                      if($stmt->bind_param('si', $id, $user_id) && $stmt->execute()){
                              $res['status'] = 'success';
                              $res['data']['message'] = 'Successfully removed note!';
                      }else{
                              $res['status'] = 'fail';
                              $res['data']['message'] = "can't remove right now try later";
                      }

                      $stmt->close();
                      $mysqli->close();

                      return $res;
                  }
        }
?>
