import React, { createContext, useContext, userContext, useState } from 'react';

const StateConext = createContext();

const initialState = {
    chat: false,
    cart: false, 
    userProfile: false,
    notification: false,
}

export const ContextProvider = ({ children}) => {
    const [activeMenu, setActiveMenu] = useState (true);
    const [isClicked, setIsClicked] = useState(initialState)
    const [screenSize, setScreenSize] = useState(undefined) 


    const handleClick = (clicked) => {
        setIsClicked({...initialState, [clicked] : true});
    }

    return (
        <StateConext.Provider 
        value={{
            activeMenu,
            setActiveMenu,
            isClicked, 
            setIsClicked,
            handleClick,
            screenSize,
            setScreenSize
        }}>
            {children}
        </StateConext.Provider>
    )
}

export const useStateContext = () => useContext(StateConext);