<?php
$points = 9999;
foreach(array(
    'authoritarian',
    'egalitarian',
    'xenophobe',
    'xenophile',
    'militarist',
    'pacifist',
    'spiritualist',
    'materialist'
) as $pos => $ethic) {
    $pos1=$pos+1;
    $d1 = "namespace = idrinthimprovedfactions
pop_event = {
    id = idrinthimprovedfactions.10{$pos1}
    is_triggered_only = yes
    hide_window = yes
    immediate = {
        if = {
            limit = {
                happiness < 0.01
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}2}
        }
        if = {
            limit = {
                happiness < 0.05
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}2}
        }
        if = {
            limit = {
                happiness < 0.10
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}2}
        }
        if = {
            limit = {
                happiness < 0.16
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}2}
        }
        if = {
            limit = {
                happiness < 0.23
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}2}
        }
        if = {
            limit = {
                happiness < 0.31
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}2}
        }
        if = {
            limit = {
                happiness < 0.4
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}2}
        }
        if = {
            limit = {
                happiness < 0.5
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}2}
        }
        if = {
            limit = {
                happiness > 0.5
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}1}
        }
        if = {
            limit = {
                happiness > 0.6
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}1}
        }
        if = {
            limit = {
                happiness > 0.69
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}1}
        }
        if = {
            limit = {
                happiness > 0.77
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}1}
        }
        if = {
            limit = {
                happiness > 0.84
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}1}
        }
        if = {
            limit = {
                happiness > 0.9
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}1}
        }
        if = {
            limit = {
                happiness > 0.95
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}1}
        }
        if = {
            limit = {
                happiness > 0.99
            }
            pop_event = {id=idrinthimprovedfactions.10{$pos1}1}
        }
    }
}
pop_event = {
    id = idrinthimprovedfactions.10{$pos1}1
    is_triggered_only = yes
    hide_window = yes
    immediate = {
        owner = {
            country_event = { id = idrinthimprovedfactions.10{$pos1}10 }
        }
        if = {
            limit = { is_enslaved = no }
            owner = {
                country_event = { id = idrinthimprovedfactions.10{$pos1}10 }
            }
        }
        if = {
            limit = { member_of_faction = yes }
            owner = {
                country_event = { id = idrinthimprovedfactions.10{$pos1}10 }
            }
        }
        if = {
            limit = { 
                member_of_faction = yes
                is_enslaved = no
            }
            owner = {
                country_event = { id = idrinthimprovedfactions.10{$pos1}10 }
            }
        }
    }
}
country_event = {
    id = idrinthimprovedfactions.10{$pos1}10
    is_triggered_only = yes
    hide_window = yes
    immediate = {
        random_list = {
            2 = {
                add_event_chain_counter = {
                    event_chain = idrinthimprovedfactions_influence_{$ethic}
                    counter = idrinthimprovedfactions_positive
                    amount = 1
                }
            }
            1 = {
                add_event_chain_counter = {
                    event_chain = idrinthimprovedfactions_influence_{$ethic}
                    counter = idrinthimprovedfactions_negative
                    amount = -1
                }
            }
            1 = {
                add_event_chain_counter = {
                    event_chain = idrinthimprovedfactions_influence_{$ethic}
                    counter = idrinthimprovedfactions_positive
                    amount = 2
                }
            }
            16 = { }
        }
    }
}
pop_event = {
    id = idrinthimprovedfactions.10{$pos1}2
    is_triggered_only = yes
    hide_window = yes
    immediate = {
        owner = {
            country_event = { id = idrinthimprovedfactions.10{$pos1}20 }
        }
        if = {
            limit = { is_enslaved = no }
            owner = {
                country_event = { id = idrinthimprovedfactions.10{$pos1}20 }
            }
        }
        if = {
            limit = { member_of_faction = yes }
            owner = {
                country_event = { id = idrinthimprovedfactions.10{$pos1}20 }
            }
        }
        if = {
            limit = { 
                member_of_faction = yes
                is_enslaved = no
            }
            owner = {
                country_event = { id = idrinthimprovedfactions.10{$pos1}20 }
            }
        }
    }
}
country_event = {
    id = idrinthimprovedfactions.10{$pos1}20
    is_triggered_only = yes
    hide_window = yes
    immediate = {
        random_list = {
            2 = {
                add_event_chain_counter = {
                    event_chain = idrinthimprovedfactions_influence_{$ethic}
                    counter = idrinthimprovedfactions_negative
                    amount = 1
                }
            }
            1 = {
                add_event_chain_counter = {
                    event_chain = idrinthimprovedfactions_influence_{$ethic}
                    counter = idrinthimprovedfactions_positive
                    amount = -1
                }
            }
            1 = {
                add_event_chain_counter = {
                    event_chain = idrinthimprovedfactions_influence_{$ethic}
                    counter = idrinthimprovedfactions_negative
                    amount = 2
                }
            }
            9 = { }
        }
    }
}";
                $d2="namespace = idrinthimprovedfactions

country_event = {
    id = idrinthimprovedfactions.20{$pos1}
    hide_window = yes
    trigger = {
        has_event_chain = idrinthimprovedfactions_influence_{$ethic}
        has_completed_event_chain_counter = {
            event_chain = idrinthimprovedfactions_influence_{$ethic}
            counter = idrinthimprovedfactions_positive
        }
    }
    immediate = {
        random_list = {
            1 = {
                add_modifier = {
                    modifier = idrinthimprovedfactions_happy_{$ethic}
                    days = 30
                }
            }
            9 = {
                add_event_chain_counter = {
                    event_chain = idrinthimprovedfactions_influence_{$ethic}
                    counter=idrinthimprovedfactions_positive_1
                    amount = 1
                }
            }
            10 = {}
        }
        add_event_chain_counter = {
            event_chain = idrinthimprovedfactions_influence_{$ethic}
            counter=idrinthimprovedfactions_positive
            amount = -$points
        }
        add_event_chain_counter = {
            event_chain = idrinthimprovedfactions_influence_{$ethic}
            counter=idrinthimprovedfactions_positive_1
            amount = 1
        }
    }
}
country_event = {
    id = idrinthimprovedfactions.21{$pos1}
    title = idrinthimprovedfactions.21{$pos1}.name
    desc = idrinthimprovedfactions.21{$pos1}.desc
    picture = unity_symbol    
    trigger = {
        has_event_chain = idrinthimprovedfactions_influence_{$ethic}
        has_completed_event_chain_counter = {
            event_chain = idrinthimprovedfactions_influence_{$ethic}
            counter = idrinthimprovedfactions_positive_1
        }
    }
    immediate = {
        random_owned_planet = {".(in_array($ethic, array('authoritarian','pacifist','spiritualist','xenophobe'))?"
            create_army = {
                owner = FROM
                species = FROM
                type = {$ethic}_army
            }":"
            create_fleet = {
                effect = {
                    set_owner = FROM
                    create_ship = {
                        name = random
                        random_existing_design = idrinthimprovedfactions_{$ethic}_corvette
                    }
                    set_fleet_stance = evasive				
                    set_location = prev
                }		
            }")."
        }
        add_modifier = {
            modifier = idrinthimprovedfactions_happy_{$ethic}_1
            days = 300
        }
        add_event_chain_counter = {
            event_chain = idrinthimprovedfactions_influence_{$ethic}
            counter=idrinthimprovedfactions_positive_1
            amount = -1000
        }
    }
    option = {
        name = GREAT
    }
}
country_event = {
    id = idrinthimprovedfactions.24{$pos1}
    title = idrinthimprovedfactions.24{$pos1}.name
    desc = idrinthimprovedfactions.24{$pos1}.desc
    picture = unity_symbol    
    trigger = {
        has_event_chain = idrinthimprovedfactions_influence_{$ethic}
        has_completed_event_chain_counter = {
            event_chain = idrinthimprovedfactions_influence_{$ethic}
            counter = idrinthimprovedfactions_negative_1
        }
    }
    immediate = {
        random_owned_planet = {
            add_modifier = {
                modifier = idrinthimprovedfactions_unhappy_{$ethic}_planet_1
                days = 720
            }
        }
        add_modifier = {
            modifier = idrinthimprovedfactions_unhappy_{$ethic}_1
            days = 240
        }
        add_event_chain_counter = {
            event_chain = idrinthimprovedfactions_influence_{$ethic}
            counter=idrinthimprovedfactions_negative_1
            amount = -1000
        }
    }
    option = {
        name = SCARY
    }
}
country_event = {
    id = idrinthimprovedfactions.22{$pos1}
    hide_window = yes
    trigger = {
        has_event_chain = idrinthimprovedfactions_influence_{$ethic}
        has_completed_event_chain_counter = {
            event_chain = idrinthimprovedfactions_influence_{$ethic}
            counter = idrinthimprovedfactions_negative
        }
    }
    immediate = {
        random_owned_planet = {
            add_modifier = {
                modifier = idrinthimprovedfactions_unhappy_{$ethic}_planet
                days = 120
            }
        }
        add_modifier = {
            modifier = idrinthimprovedfactions_unhappy_{$ethic}
            days = 60
        }
        add_event_chain_counter = {
            event_chain = idrinthimprovedfactions_influence_{$ethic}
            counter=idrinthimprovedfactions_negative
            amount = -$points
        }
        add_event_chain_counter = {
            event_chain = idrinthimprovedfactions_influence_{$ethic}
            counter=idrinthimprovedfactions_negative_1
            amount = 1
        }
    }
}";
                file_put_contents("01_idrinthimprovedfactions_{$ethic}.txt", $d1);
                file_put_contents("02_idrinthimprovedfactions_{$ethic}.txt", $d2);
}