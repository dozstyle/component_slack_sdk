<?php
  # https://api.slack.com/docs/interactive-message-field-guide#confirmation_fields
  class SlackMessageActionButtonConfirm {
    private $title;
    private $text;
    private $ok_text;
    private $dismiss_text;

    public function __construct($text, $title = '', $ok_text = 'Okay', $dismiss_text = 'Cancel') {
      # Requires
      $this->text = $text;

      # Optionals
      $this->title = $title;
      $this->ok_text = $ok_text;
      $this->dismiss_text = $dismiss_text;
    }

    public function toArray() {
      $confirm = array(
        "title" => $this->title,
        "text" => $this->text,
        "ok_text" => $this->ok_text,
        "dismiss_text" => $this->dismiss_text
      );
      return $confirm;
    }
  }
?>
