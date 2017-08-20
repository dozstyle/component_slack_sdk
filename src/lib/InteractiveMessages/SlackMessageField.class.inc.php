<?php
  # https://api.slack.com/docs/message-buttons
  # There is no field document in https://api.slack.com/docs/interactive-message-field-guide
  # But, here has an example that used field in the attachment
  class SlackMessageField {
    private $title;
    private $value;
    private $short;

    public function __construct($title, $value, $short = true) {
      $this->title = $title;
      $this->value = $value;
      $this->short = $short;
    }

    public function toArray() {
      $field = array(
        'title' => $this->title,
        'value' => $this->value,
        'short' => $this->short,
      );
      return $field;
    }
  }
?>
