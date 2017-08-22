<?php
  # https://api.slack.com/docs/interactive-message-field-guide#action_fields
  # If you want to keep button messages keep on Slack after button clicked, you have to reply the button messages to re-created button
  # https://api.slack.com/methods/groups.replies
  # https://api.slack.com/methods/channels.replies
  # https://api.slack.com/methods/im.replies
  # https://api.slack.com/methods/mpim.replies

  namespace DozStyle\Slack\MessageAttachments

  class ActionManual {
    private $name;
    private $text;
    private $type;
    private $value;
    private $data_source;
    private $selected_options;
    private $min_query_length;

    private $options;
    private $option_groups;

    public function __construct($name, $text, $value = '',  $data_source = 'static', $selected_options = 'static', $min_query_length = 1) {
      # Requires
      $this->name = $name;
      $this->type = 'select';
      $this->text = $text;

      # Optionals
      $this->data_source = $data_source;
      $this->selected_options = $selected_options;
      $this->min_query_length = $min_query_length;
      $this->options = array();
      $this->option_groups = array();
    }

    public function addOptions() {
      $args = func_get_args();
      $cnt = 0;
      foreach ($args as $option) {
        $this->options[$cnt] = $option;
        $cnt++;
      }
    }

    public function addOptionGroups() {
      $args = func_get_args();
      $cnt = 0;
      foreach ($args as $option_group) {
        $this->option_groups[$cnt] = $option_group;
        $cnt++;
      }
    }

    public function toArray() {
      $action = array(
        'name'  => $this->name,
        'type'  => $this->type,
        'text'  => $this->text,
        'value' => $this->value,
        'data_source' => $this->data_source,
        'selected_options' => $this->selected_options,
        'min_query_length' => $this->min_query_length
      );

      if ( ! empty($this->options) ) {
        $action['options'] = $this->options;
      }

      if ( ! empty($this->option_groups) ) {
        $action['option_groups'] = $this->option_groups;
      }
      return $action;
    }
  }
?>
