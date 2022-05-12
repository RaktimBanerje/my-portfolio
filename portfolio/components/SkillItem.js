import React from 'react'

const SkillItem = ({ name, number }) => {
  return (
    <div className="progress_inner" data-value={number} data-color={number < 40 ? "#ff4444" : number >= 40 && number < 80 ? "#ffbb33" : "#00C851"}>
      <span><span className="label">{name}</span><span className="number">{number}%</span></span>
      <div className="background">
          <div className="bar">
              <div className="bar_in"></div>
          </div>
      </div>
  </div>
  )
}

export default SkillItem