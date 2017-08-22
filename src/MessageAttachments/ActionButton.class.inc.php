<?php
  # https://api.slack.com/docs/interactive-message-field-guide#action_fields
  # If you want to keep button messages keep on Slack after button clicked, you have to reply the button messages to re-created button
  # https://api.slack.com/methods/groups.replies
  # https://api.slack.com/methods/channels.replies
  # https://api.slack.com/methods/im.replies
  # https://api.slack.com/methods/mpim.replies

  namespace DozStyle\Slack\MessageAttachments

  class ActionButton {
    private $name;
    private $text;
    private $type;
    private $value;
    private $style;
    private $confirm;

    public function __construct($name, $text, $value = '',  $style = 'default', $confirm = array()) {
      # Requires
      $this->name = $name;
      $this->type = 'button';
      $this->text = $text;

      # Optionals
      $this->style = $style;
      $this->value = $value;
      $this->confirm = $confirm;
    }

    public function setConfirm($confirm) {
      $this->confirm = $confirm;
    }

    public function toArray() {
      $action = array(
        'name'  => $this->name,
        'type'  => $this->type,
        'text'  => $this->text,
        'style' => $this->style,
        'value' => $this->value
      );

      if ( ! empty($this->confirm) ) {
        $action['confirm'] = $this->confirm;
      }

      return $action;
    }
  }
?>
