<?php
  # https://api.slack.com/docs/interactive-message-field-guide#option_groups
  class SlackMessageActionManualOptionGroup {
    private $text;
    private $options;

    public function __construct($text) {
      $this->text = $text;
      $this->options = array();
    }

    public function addOptions() {
      $args = func_get_args();
      $cnt = 0;
      foreach ($args as $option) {
        $this->options[$cnt] = $option;
        $cnt++;
      }
    }

    public function toArray() {
      $option_group = array(
        'text' => $this->text,
        'options' => $this->options
      );
      return $option_group;
    }
  }
?>
