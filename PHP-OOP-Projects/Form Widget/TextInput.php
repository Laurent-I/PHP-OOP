<?php

class TextInput extends BaseInput
{

//    public function render(): string
//    {
//        // TODO: Implement render() method.
//
//        return sprintf('<div>
//               <label>%s</label><br>
//               <input type="text" name="%s" value="%s"/>
//            </div>', $this->label, $this->name, $this->value);
//    }

    public function renderInput(): string
    {
        // TODO: Implement renderInput() method.
        return  sprintf('<input type="text" name="%s" value="%s">', $this->name,$this->value);
    }
}